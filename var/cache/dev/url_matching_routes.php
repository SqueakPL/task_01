<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/books' => [
            [['_route' => 'api_book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_book_create', '_controller' => 'App\\Controller\\BookController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/list' => [[['_route' => 'app_list', '_controller' => 'App\\Controller\\ListController::index'], null, null, null, false, false, null]],
        '/posts' => [[['_route' => 'app_posts', '_controller' => 'App\\Controller\\PostsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/books/([^/]++)(?'
                    .'|(*:64)'
                .')'
                .'|/list/([^/]++)(*:86)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'api_book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        86 => [
            [['_route' => 'book_delete_fro_list', '_controller' => 'App\\Controller\\ListController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
