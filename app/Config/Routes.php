<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/sobre', 'SobreController::index');

$routes->group('', function ($routes) {
    $routes->get('login', 'LoginController::index');
    $routes->get('forgot_password', 'LoginController::forgot_password');
    $routes->get('first_access', 'LoginController::first_access');
    $routes->get('logout', 'LoginController::logout');
});

