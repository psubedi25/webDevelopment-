<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Ajax;
use App\Controllers\Apis;

$routes->get('/', 'Home::index');
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);

$routes->get('ajax/get/(:segment)', 'Ajax::get/$1');

$routes->get('apis/wikipedia', 'Apis::wikipedia');

// Specific route for 'home'
$routes->get('home', [Pages::class, 'index']);

$routes->get('(:segment)', [Pages::class, 'view']); // Catch-all route
