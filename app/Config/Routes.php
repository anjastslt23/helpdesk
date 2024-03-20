<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Fungsi Login/Masuk
$routes->get('/', 'SigninController::index');
$routes->post('initialize', 'SigninController::loginRules');
