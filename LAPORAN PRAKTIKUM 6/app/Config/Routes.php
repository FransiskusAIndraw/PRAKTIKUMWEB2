<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->group('buku', ['filter' => 'auth'], function($routes){
    $routes->get('/', 'BukuController::index');
    $routes->get('create', 'BukuController::create');
    $routes->post('store', 'BukuController::store');
    $routes->get('edit/(:num)', 'BukuController::edit/$1');
    $routes->post('update/(:num)', 'BukuController::update/$1');
    $routes->get('delete/(:num)', 'BukuController::delete/$1');
});

$routes->get('/logout', 'LoginController::logout');





$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});
