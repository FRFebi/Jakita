<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/homepage2', 'Home::homepage2');
$routes->get('/homepage3', 'Home::homepage3');
