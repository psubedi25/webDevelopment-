<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Ajax;
use App\Controllers\Apis;

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);


$routes->get('ajax/get/(:segment)', 'Ajax::get/$1');

$routes->get('apis/wikipedia', 'Apis::wikipedia');

$routes->get('(:segment)', [Pages::class, 'view']);

