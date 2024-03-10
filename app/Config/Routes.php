<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//untuk group route sekolah
$routes->group('', function ($r) {
    $r->get('login', 'Auth::login');
    $r->get('register', 'Auth::register');
});
//untuk group route sekolah
$routes->group('auth', function ($r) {
    $r->post('login', 'Auth::processLogin');
    $r->post('register', 'Auth::processRegister');
    $r->get('logout', 'Auth::processLogout');
});

$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Home::index');

    $routes->get('/users', 'Users::index', ['as' => 'users']);
    $routes->get('/users/create', 'Users::create');
    $routes->post('/users/save', 'Users::save');
    $routes->get('/users/edit/(:any)', 'Users::edit/$1');
    $routes->post('/users/update', 'Users::update');
    $routes->get('/users/delete/(:any)', 'Users::delete/$1');
});
