<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/account/all' => [[['_route' => 'app_account_all', '_controller' => 'App\\Controller\\AccountController::all'], null, null, null, false, false, null]],
        '/child/add' => [[['_route' => 'app_child_add', '_controller' => 'App\\Controller\\ChildController::add'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'findAllEvents', '_controller' => 'App\\Controller\\EventController::events'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/vue' => [[['_route' => 'vue', '_controller' => 'App\\Controller\\VueController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/event/add' => [[['_route' => 'app_event_add', '_controller' => 'App\\Controller\\EventController::add'], null, null, null, false, false, null]],
        '/organisation/add' => [[['_route' => 'app_organisation_add', '_controller' => 'App\\Controller\\OrganisationController::add'], null, null, null, false, false, null]],
        '/organisation/all' => [[['_route' => 'app_organisations_all', '_controller' => 'App\\Controller\\OrganisationController::all'], null, null, null, false, false, null]],
        '/account/update' => [[['_route' => 'app_account_update', '_controller' => 'App\\Controller\\AccountController::update'], null, null, null, false, false, null]],
        '/account/register' => [[['_route' => 'app_account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account/login' => [[['_route' => 'app_account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/account/registeracc' => [[['_route' => 'app_account_register2', '_controller' => 'App\\Controller\\AccountController::registerAcc'], null, null, null, false, false, null]],
        '/security/login' => [[['_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/security/logout' => [[['_route' => 'app_security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/event/(?'
                    .'|all(?:/([^/]++))?(*:196)'
                    .'|show/([^/]++)(*:217)'
                    .'|delete/([^/]++)(*:240)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_event_all', 'page' => 1, '_controller' => 'App\\Controller\\EventController::all'], ['page'], null, null, false, true, null]],
        217 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        240 => [
            [['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
