<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');

use App\Controllers\TaskController;

$routes->get('/', [TaskController::class, 'index']);
$routes->get('/tasks', [TaskController::class, 'list']);
$routes->get('/profile', [TaskController::class, 'profile']);
$routes->get('/about', [TaskController::class, 'about']);