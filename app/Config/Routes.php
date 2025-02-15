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
    $routes->get('logout', 'LoginController::logout');
});

$routes->group('first_access', function ($routes) {
    $routes->get('', 'FirstAccessController::first_access');
    $routes->post('validate', 'FirstAccessController::validateForm');
    
    $routes->post('/', 'FirstAccessController::solicitarAcesso');
    $routes->get('(:segment)', 'FirstAccessController::validarAcesso/$1');
    $routes->post('concluir', 'FirstAccessController::concluirCadastro');
});

$routes->post('first_access_validate', 'FirstAccessController::first_access_validate');
