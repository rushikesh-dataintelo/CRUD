<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Config\Services;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('ProductController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Default route
$routes->get('/', 'ProductController::index');

$routes->get('/product', 'ProductController::index');
$routes->get('/product/create', 'ProductController::create');
$routes->post('/product/store', 'ProductController::store');
$routes->get('/product/edit/(:num)', 'ProductController::edit/$1');
$routes->post('/product/update/(:num)', 'ProductController::update/$1');
$routes->post('/product/delete/(:num)', 'ProductController::delete/$1');
