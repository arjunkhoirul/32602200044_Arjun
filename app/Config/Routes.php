<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');

$routes->get('/form', 'FormController::index');
$routes->post('/submit', 'FormController::submit');

$routes->get('/latihanview', 'HalloWorld::index');

$routes->get('/latihanbab4', 'LatihanBab4::index');

$routes->get('/profile', 'TugasBab4::profile');
$routes->get('/about', 'TugasBab4::about');