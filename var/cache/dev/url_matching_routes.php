<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\AnnonceController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/annonces/nouvelle' => [[['_route' => 'annonce_nouvelle', '_controller' => 'App\\Controller\\AnnonceController::nouvelle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mes-annonces' => [[['_route' => 'mes_annonces', '_controller' => 'App\\Controller\\AnnonceController::mesAnnonces'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AuthController::connexion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\AuthController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\AuthController::deconnexion'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homePage', '_controller' => 'App\\Controller\\mainController::homePage'], null, null, null, false, false, null]],
        '/vendre-ma-voiture' => [[['_route' => 'vendreMaVoiture', '_controller' => 'App\\Controller\\mainController::vendre_ma_voiture'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/annonces/(?'
                    .'|(\\d+)(*:60)'
                    .'|(\\d+)/modifier(*:81)'
                    .'|(\\d+)/supprimer(*:103)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'annonce_detail', '_controller' => 'App\\Controller\\AnnonceController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        81 => [[['_route' => 'annonce_modifier', '_controller' => 'App\\Controller\\AnnonceController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [
            [['_route' => 'annonce_supprimer', '_controller' => 'App\\Controller\\AnnonceController::supprimer'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
