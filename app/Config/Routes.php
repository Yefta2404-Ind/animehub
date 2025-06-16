<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Pages::home');
$routes->get('/tentang', 'Pages::about');
$routes->get('/layanan', 'Pages::services');
$routes->get('/kontak', 'Pages::contact');
$routes->get('/anime', 'Pages::anime');
$routes->get('/anime/(:segment)', 'Pages::detail/$1');


