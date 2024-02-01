<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/users', 'Users::index', ['as' => 'users']);
$routes->get('/users/create', 'Users::create');
$routes->post('/users/save', 'Users::save');
$routes->get('/users/edit/(:any)', 'Users::edit/$1');
$routes->post('/users/update', 'Users::update');
$routes->get('/users/delete/(:any)', 'Users::delete/$1');
