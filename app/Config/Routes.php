<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('tabulka', 'Main::tabulka');
$routes->get('station/(:num)', 'Main::station/$1');
$routes->get('zeme/(:num)', 'Main::zeme/$1');
$routes->get('mereni/(:num)', 'Main::mereni/$1');
