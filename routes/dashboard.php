<?php

use CodeIgniter\Config\Services;

$routes = Services::routes();

$routes->group('{locale}/dashboard', ['namespace' => 'App\Controllers\Dashboard', 'filter' => 'auth:web'], function ($routes) {
    $routes->get('/', 'DashboardController::index', ['filter' => 'verified', 'as' => 'dashboard']);


    //TODO: criar filtro subscription
    $routes->group('adverts', ['namespace' => 'App\Controllers\Dashboard'], function ($routes) {

        $routes->get('my', 'AdvertsUserController::index', [ 'as' => 'my.adverts' ]);
    });
});
