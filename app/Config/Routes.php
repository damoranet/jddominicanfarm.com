<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Paginas::index');
$routes->get('(:any)', 'Paginas::vista/$1');
$routes->get('(:any)/(:any)', 'Paginas::vista/$1/$2');