<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');

$routes->get('/komik/edit/(:segment)', 'komik::edit/$1');

$routes->get('/komik/(:segment)', 'komik::detail/$1');

$routes->setAutoRoute(true);
