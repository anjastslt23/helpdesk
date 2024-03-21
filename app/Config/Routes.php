<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Fungsi Login/Masuk
$routes->get('logout', 'SigninController::logout');
$routes->get('/', 'SigninController::index');
$routes->get('lupa_password', 'SigninController::lupaPassword');
$routes->post('initialize', 'SigninController::loginRules');

// Group untuk bagian admin

$routes->group('admin', ['filter' => 'authGuard'], function ($routes) {

    $routes->group('', function ($routes) {
        $routes->get('dashboard', 'Admin\DashboardControl::index');
    });
});

$routes->get('admin/dashboard', 'DashboardController::index');
