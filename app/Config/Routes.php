<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Login routes
$routes->get('/auth/login', 'LoginController::index');
$routes->post('/auth/login', 'LoginController::login');

// Logout routes
$routes->get('/auth/logout', 'LogoutController::index');

// Dashboard routes
$routes->get('/dashboard', 'DashboardController::index');

// Account routes
$routes->get('/configuration/account', 'AccountController::index');
$routes->post('/configuration/account', 'AccountController::store');
$routes->post('/configuration/account/delete/(:num)', 'AccountController::delete/$1');

// Employee routes
$routes->get('/configuration/employees', 'EmployeeController::index');
$routes->post('/configuration/employees', 'EmployeeController::store');
$routes->post('/configuration/employees/delete/(:num)', 'EmployeeController::delete/$1');

// User routes
$routes->get('/users', 'UserController::index');
// $routes->get('/users/create', 'UserController::create');
// $routes->get('/users/edit/(:num)', 'UserController::edit/$1');
// $routes->post('/users/update/(:num)', 'UserController::update/$1');
// $routes->post('/users/delete/(:num)', 'UserController::delete/$1');
// $routes->get('/users/(:num)', 'UserController::show/$1');
