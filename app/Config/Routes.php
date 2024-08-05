<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('attendance', 'AttendanceController::index');
$routes->get('attendance/create', 'AttendanceController::create');
$routes->post('attendance/store', 'AttendanceController::store');
$routes->get('attendance/delete/(:num)', 'AttendanceController::delete/$1');