<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_utilisateurs', '_controller' => 'App\\Controller\\AdminController::utilisateurs'], null, null, null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'admin_annonces', '_controller' => 'App\\Controller\\AdminController::annonces'], null, null, null, false, false, null]],
        '/admin/catalogue' => [[['_route' => 'admin_catalogue', '_controller' => 'App\\Controller\\AdminController::catalogue'], null, null, null, false, false, null]],
        '/admin/catalogue/marques/ajouter' => [[['_route' => 'admin_ajouter_marque', '_controller' => 'App\\Controller\\AdminController::ajouterMarque'], null, ['POST' => 0], null, false, false, null]],
        '/annonces' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\AnnonceController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/annonces/nouvelle' => [[['_route' => 'annonce_nouvelle', '_controller' => 'App\\Controller\\AnnonceController::nouvelle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mes-annonces' => [[['_route' => 'mes_annonces', '_controller' => 'App\\Controller\\AnnonceController::mesAnnonces'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AuthController::connexion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\AuthController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\AuthController::deconnexion'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\StatsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homePage', '_controller' => 'App\\Controller\\mainController::homePage'], null, null, null, false, false, null]],
        '/vendre-ma-voiture' => [[['_route' => 'vendreMaVoiture', '_controller' => 'App\\Controller\\mainController::vendre_ma_voiture'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|utilisateurs/([^/]++)/supprimer(*:86)'
                        .'|annonces/([^/]++)/(?'
                            .'|pauser(*:120)'
                            .'|reactiver(*:137)'
                            .'|supprimer(*:154)'
                        .')'
                        .'|catalogue/(?'
                            .'|m(?'
                                .'|arques/([^/]++)/(?'
                                    .'|supprimer(*:208)'
                                    .'|modeles(?'
                                        .'|(*:226)'
                                        .'|/ajouter(*:242)'
                                    .')'
                                .')'
                                .'|odeles/([^/]++)/(?'
                                    .'|supprimer(*:280)'
                                    .'|generations(?'
                                        .'|(*:302)'
                                        .'|/ajouter(*:318)'
                                    .')'
                                .')'
                            .')'
                            .'|generations/([^/]++)/(?'
                                .'|supprimer(*:362)'
                                .'|versions(?'
                                    .'|(*:381)'
                                    .'|/ajouter(*:397)'
                                .')'
                            .')'
                            .'|versions/([^/]++)/supprimer(*:434)'
                        .')'
                    .')'
                    .'|nnonces/(?'
                        .'|(\\d+)(*:460)'
                        .'|(\\d+)/modifier(*:482)'
                        .'|(\\d+)/vendu(*:501)'
                        .'|(\\d+)/supprimer(*:524)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        86 => [[['_route' => 'admin_supprimer_utilisateur', '_controller' => 'App\\Controller\\AdminController::supprimerUtilisateur'], ['id'], ['POST' => 0], null, false, false, null]],
        120 => [[['_route' => 'admin_pauser_annonce', '_controller' => 'App\\Controller\\AdminController::pauserAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        137 => [[['_route' => 'admin_reactiver_annonce', '_controller' => 'App\\Controller\\AdminController::reactiverAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        154 => [[['_route' => 'admin_supprimer_annonce', '_controller' => 'App\\Controller\\AdminController::supprimerAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        208 => [[['_route' => 'admin_supprimer_marque', '_controller' => 'App\\Controller\\AdminController::supprimerMarque'], ['id'], ['POST' => 0], null, false, false, null]],
        226 => [[['_route' => 'admin_catalogue_modeles', '_controller' => 'App\\Controller\\AdminController::catalogueModeles'], ['id'], null, null, false, false, null]],
        242 => [[['_route' => 'admin_ajouter_modele', '_controller' => 'App\\Controller\\AdminController::ajouterModele'], ['id'], ['POST' => 0], null, false, false, null]],
        280 => [[['_route' => 'admin_supprimer_modele', '_controller' => 'App\\Controller\\AdminController::supprimerModele'], ['id'], ['POST' => 0], null, false, false, null]],
        302 => [[['_route' => 'admin_catalogue_generations', '_controller' => 'App\\Controller\\AdminController::catalogueGenerations'], ['id'], null, null, false, false, null]],
        318 => [[['_route' => 'admin_ajouter_generation', '_controller' => 'App\\Controller\\AdminController::ajouterGeneration'], ['id'], ['POST' => 0], null, false, false, null]],
        362 => [[['_route' => 'admin_supprimer_generation', '_controller' => 'App\\Controller\\AdminController::supprimerGeneration'], ['id'], ['POST' => 0], null, false, false, null]],
        381 => [[['_route' => 'admin_catalogue_versions', '_controller' => 'App\\Controller\\AdminController::catalogueVersions'], ['id'], null, null, false, false, null]],
        397 => [[['_route' => 'admin_ajouter_version', '_controller' => 'App\\Controller\\AdminController::ajouterVersion'], ['id'], ['POST' => 0], null, false, false, null]],
        434 => [[['_route' => 'admin_supprimer_version', '_controller' => 'App\\Controller\\AdminController::supprimerVersion'], ['id'], ['POST' => 0], null, false, false, null]],
        460 => [[['_route' => 'annonce_detail', '_controller' => 'App\\Controller\\AnnonceController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'annonce_modifier', '_controller' => 'App\\Controller\\AnnonceController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'annonce_vendu', '_controller' => 'App\\Controller\\AnnonceController::marquerVendu'], ['id'], ['POST' => 0], null, false, false, null]],
        524 => [
            [['_route' => 'annonce_supprimer', '_controller' => 'App\\Controller\\AnnonceController::supprimer'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
