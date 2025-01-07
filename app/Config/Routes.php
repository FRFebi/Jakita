<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::homepage');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/test', 'User::homepage');
$routes->get('/register1', 'Home::register');
$routes->get('/login1', 'Home::login');
$routes->post('register-data', 'User::register');
$routes->post('login-data', 'User::login');
$routes->get('/homepage2', 'Home::homepage2');
$routes->get('/homepage3', 'Home::homepage3');

service('auth')->routes($routes);

$routes->get('/role', 'Role::index');
$routes->post('/role/updateRole', 'Role::updateRole');
$routes->post('/role/removeRole', 'Role::removeRole');
