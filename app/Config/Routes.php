<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginPost');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerPost');
$routes->get('logout', 'Auth::logout');

$routes->get('students', 'Students::index');
$routes->get('students/create', 'Students::create');
$routes->post('students/store', 'Students::store');
$routes->get('students/edit/(:num)', 'Students::edit/$1');
$routes->post('students/update/(:num)', 'Students::update/$1');
$routes->get('students/delete/(:num)', 'Students::delete/$1');
$routes->get('dashboard', 'Dashboard::index');




