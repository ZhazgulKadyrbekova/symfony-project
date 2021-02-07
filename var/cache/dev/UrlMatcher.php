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
        '/truck/zhazgul' => [[['_route' => 'truck_zhazgul_index', '_controller' => 'App\\Controller\\TruckZhazgulController::index'], null, ['GET' => 0], null, true, false, null]],
        '/truck/zhazgul/new' => [[['_route' => 'truck_zhazgul_new', '_controller' => 'App\\Controller\\TruckZhazgulController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/truck/zhazgul/search/form' => [[['_route' => 'search_form', '_controller' => 'App\\Controller\\TruckZhazgulController::searchModelForm'], null, null, null, false, false, null]],
        '/truck/zhazgul/search/id' => [[['_route' => 'search_id', '_controller' => 'App\\Controller\\TruckZhazgulController::searchID'], null, null, null, false, false, null]],
        '/truck/zhazgul/search/model' => [[['_route' => 'search_model', '_controller' => 'App\\Controller\\TruckZhazgulController::searchModel'], null, null, null, false, false, null]],
        '/truck/zhazgul/search/year' => [[['_route' => 'search_year', '_controller' => 'App\\Controller\\TruckZhazgulController::searchYear'], null, null, null, false, false, null]],
        '/truck/zhazgul/search/owner' => [[['_route' => 'search_owner', '_controller' => 'App\\Controller\\TruckZhazgulController::searchOwner'], null, null, null, false, false, null]],
        '/truck/zhazgul/search/price' => [[['_route' => 'search_price', '_controller' => 'App\\Controller\\TruckZhazgulController::searchPrice'], null, null, null, false, false, null]],
        '/zhazgul/kadyrbekova' => [[['_route' => 'zhazgul_kadyrbekova', '_controller' => 'App\\Controller\\ZhazgulKadyrbekovaController::index'], null, null, null, false, false, null]],
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
                .'|/truck/zhazgul/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'truck_zhazgul_show', '_controller' => 'App\\Controller\\TruckZhazgulController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'truck_zhazgul_edit', '_controller' => 'App\\Controller\\TruckZhazgulController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [
            [['_route' => 'truck_zhazgul_delete', '_controller' => 'App\\Controller\\TruckZhazgulController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
