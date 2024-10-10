<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'LoginController::index');
// Ruta para el proceso de autenticación (authenticate)
$routes->post('/login/authenticate', 'LoginController::authenticate');

// Ruta para cerrar sesión (logout)
$routes->get('/logout', 'LoginController::logout');

$routes->get('/MenuEstudiante', 'MenuEstudiantes::index');

$routes->get('/MenuEmpresas', 'MenuEmpresas::index');
$routes->get('/Vacantes/VerVacantes', 'VacantesController::MostrarVacantes');

$routes->get('vacantes/edit/(:num)', 'VacantesController::edit/$1');
$routes->post('vacantes/update/(:num)', 'VacantesController::update/$1');

$routes->get('/vacantes/NuevaVacante', 'VacantesController::NuevaVacante');

$routes->post('/vacantes/create', 'VacantesController::create');
$routes->get('/Vacantes/VerTodasVacantes', 'VacantesControllerEst::MostrarVacantes');