<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormFactoryInterface;

final class ExamplePageTwoController extends AbstractController
{
    #[Route('/examplePageTwo', name: 'app_example_page_two')]
    public function index(Request $request, FormFactoryInterface $formFactory): Response
    {
        $form = $formFactory->create(ContactType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->addFlash('success', 'Dziękujemy za wiadomość!');
            return $this->redirectToRoute('app_example_page_two');
        }

        $datasOfWedding =[
            [
                'header'=>'Data:',
                'content'=>'10.04.2025',
            ],
            [
                'header'=>'Godzina:',
                'content'=>'11:00',
            ],
            [
                'header'=>'Miejsce:',
                'content'=>'Kościół św. Jana w Warszawie',
            ],
            [
                'header'=>'Adres:',
                'content'=>'Świętojańska 8, 00-278 Warszawa',
            ],
        ];
        $datasOfWeddingReception =[
            [
                'header'=>'Data:',
                'content'=>'10.04.2025',
            ],
            [
                'header'=>'Godzina:',
                'content'=>'13:00',
            ],
            [
                'header'=>'Miejsce:',
                'content'=>'Sala Bankietowa "Czarna Perła"',
            ],
            [
                'header'=>'Adres:',
                'content'=>'Paryska 12, 00-278 Warszawa',
            ],
        ];
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
        return $this->render('example_page/examplePageTwo.html.twig', [
            'nameOfCouple' => 'Justyna i Krzysztof',
            'dateOfWedding' => '16-09-2023',
            'datasOfWedding' => $datasOfWedding,
            'datasOfWeddingReception' => $datasOfWeddingReception,
            'attractions' => $attractions,
            'contactForm' => $form->createView(),
        ]);
    }
}
