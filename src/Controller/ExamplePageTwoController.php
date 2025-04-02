<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ExamplePageTwoController extends AbstractController
{
    #[Route('/example/page/two', name: 'app_example_page_two')]
    public function index(): Response
    {
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
        return $this->render('example_page/examplePageTwo.html.twig', [
            'nameOfCouple' => 'Justyna i Krzysztof',
            'dateOfWedding' => '16-09-2023',
            'datasOfWedding' => $datasOfWedding,
            'datasOfWeddingReception' => $datasOfWeddingReception,
        ]);
    }
}
