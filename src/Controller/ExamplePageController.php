<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\ListaObecnosci;
use App\Entity\Prezenty;
use App\Form\ListaObecnosciType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;



final class ExamplePageController extends AbstractController
{
    #[Route('/examplePage', name: 'app_example_page')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attractions = [
            [
                'icons'=> '<i class="fa fa-glass" aria-hidden="true"></i>', 
                'header'=>'Barman', 
                'describe'=>'Barman, który będzie robił nielimitowane drinki dla każdego.'
            ],
            [
                'icons'=> '<i class="fa fa-camera-retro" aria-hidden="true"></i>', 
                'header'=>'Fotobudka', 
                'describe'=>'Niesmowite zdjęcia, które będzie można zrobić w fotobudce.'
            ],
            [
                'icons'=> '<i class="fa fa-fire" aria-hidden="true"></i>', 
                'header'=>'Ognisko', 
                'describe'=>'Ognisko i pieczenie kiełbasek.'
            ],
            [
                'icons'=> '<i class="fa fa-paint-brush" aria-hidden="true"></i>', 
                'header'=>'Malowanie światłem', 
                'describe'=>'Pokaz sztuki malowania światłem.'
            ]
            ];
        $datasOfWedding =[
            [
                'header'=>'Data Ślubu:',
                'content'=>'10.04.2025',
            ],
            [
                'header'=>'Godzina Ceremoni:',
                'content'=>'11:00',
            ],
            [
                'header'=>'Miejsce Ślubu:',
                'content'=>'Kościół św. Jana w Warszawie',
            ],
            [
                'header'=>'Adres:',
                'content'=>'Świętojańska 8, 00-278 Warszawa',
            ],
        ];
        $datasOfWeddingReception =[
            [
                'header'=>'Data Wesela:',
                'content'=>'10.04.2025',
            ],
            [
                'header'=>'Godzina Wesela:',
                'content'=>'13:00',
            ],
            [
                'header'=>'Miejsce Wesela:',
                'content'=>'Sala Bankietowa "Czarna Perła"',
            ],
            [
                'header'=>'Adres:',
                'content'=>'Restauracyjna 12, 00-278 Warszawa',
            ],
        ];
        // Pobranie listy prezentów
        $prezenty = $entityManager->getRepository(Prezenty::class)->findAll();

        $targetDate = new \DateTime('2025-04-10 11:00:00'); // Data końcowa

        $lista = new ListaObecnosci();
        $form = $this->createForm(ListaObecnosciType::class, $lista);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lista = $form->getData();
        
            $entityManager->persist($lista);
            $entityManager->flush();
        
            $this->addFlash('success', 'Twoja obecność została zapisana!');
            
            return $this->redirectToRoute('app_example_page');
        }
        

        return $this->render('example_page/index.html.twig', [
            'imiona_pary' => 'Szymon & Justyna',
            'targetTimestampDate' => $targetDate->getTimestamp(),
            'attractions' => $attractions,
            'datasOfWedding' => $datasOfWedding,
            'datasOfWeddingReception' => $datasOfWeddingReception,
            'form'=> $form,
            'prezenty' => $prezenty,
        ]);
    }
    // Funkcja do rezerwacji prezentu
    #[Route('/rezerwujPrezent', name: 'rezerwuj_prezent', methods: ['POST'])]
    public function rezerwujPrezent(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $prezentId = $request->request->get('prezent_id');
        $rezerwujacy = $request->request->get('rezerwujacy');

        $prezent = $entityManager->getRepository(Prezenty::class)->find($prezentId);

        if (!$prezent || $prezent->isZarezerwowany()) {
            return new JsonResponse(['success' => false, 'message' => 'Prezent jest już zarezerwowany'], 400);
        }

        $prezent->setZarezerwowany(true);
        $prezent->setRezerwujacy($rezerwujacy);

        $entityManager->persist($prezent);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'message' => 'Prezent został zarezerwowany!']);
    }
}
