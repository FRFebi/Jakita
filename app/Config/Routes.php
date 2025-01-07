<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/test', 'User::homepage');
// $routes->get('/register', 'Home::register');
// $routes->get('/login', 'Home::login');
$routes->post('register-data', 'User::register');
$routes->post('login-data', 'User::login');
$routes->get('/homepage2', 'Home::homepage2');
$routes->get('/homepage3', 'Home::homepage3');

service('auth')->routes($routes);

// $routes->group('', ['namespace' => 'CodeIgniter\Shield\Controllers'], function ($routes) {
//     $routes->get('login', 'LoginController::login', ['as' => 'login']);
//     $routes->post('login', 'LoginController::attemptLogin');
//     $routes->get('logout', 'LoginController::logout');

//     $routes->get('register', 'RegisterController::register', ['as' => 'register']);
//     $routes->post('register', 'RegisterController::attemptRegister');
// });


$routes->get('/role', 'Role::index');
$routes->post('/role/updateRole', 'Role::updateRole');
$routes->post('/role/removeRole', 'Role::removeRole');
