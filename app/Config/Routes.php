<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//untuk group route sekolah
$routes->group('auth', function ($r) {
    $r->get('login', 'Auth::login');
    $r->post('login', 'Auth::processLogin');
    $r->get('register', 'Auth::register');
    $r->post('register', 'Auth::processRegister');
});

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Home::index');

    $routes->get('/users', 'Users::index', ['as' => 'users']);
    $routes->get('/users/create', 'Users::create');
    $routes->post('/users/save', 'Users::save');
    $routes->get('/users/edit/(:any)', 'Users::edit/$1');
    $routes->post('/users/update', 'Users::update');
    $routes->get('/users/delete/(:any)', 'Users::delete/$1');
});
