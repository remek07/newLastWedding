<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/examplePage' => [[['_route' => 'app_example_page', '_controller' => 'App\\Controller\\ExamplePageController::index'], null, null, null, false, false, null]],
        '/rezerwujPrezent' => [[['_route' => 'rezerwuj_prezent', '_controller' => 'App\\Controller\\ExamplePageController::rezerwujPrezent'], null, ['POST' => 0], null, false, false, null]],
        '/example/page/two' => [[['_route' => 'app_example_page_two', '_controller' => 'App\\Controller\\ExamplePageTwoController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
