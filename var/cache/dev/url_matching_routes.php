<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homePage', '_controller' => 'App\\Controller\\mainController::homePage'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\mainController::annoncesPage'], null, null, null, false, false, null]],
        '/vendre-ma-voiture' => [[['_route' => 'vendreMaVoiture', '_controller' => 'App\\Controller\\mainController::vendre_ma_voiture'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\mainController::connexionPage'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\mainController::inscriptionPage'], null, null, null, false, false, null]],
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
