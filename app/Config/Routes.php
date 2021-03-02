<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/About','Page::Aboutme');
$routes->get('/Contact','Page::Contact');
$routes->get('/','Project::index');
$routes->get('/prj/(:segment)/viewProjects','Project::viewProjects/$1');

$routes->get('/PrjAdmin','PrjAdmin::index',['filter' => 'auth']);
$routes->get('/PrjAdmin/(:segment)/preview', 'PrjAdmin::preview/$1',['filter' => 'auth']);
$routes->add('/PrjAdmin/new', 'PrjAdmin::create',['filter' => 'auth']);
$routes->add('/PrjAdmin/new', 'PrjAdmin::storeImg',['filter' => 'auth']);
$routes->add('/PrjAdmin/(:segment)/edit', 'PrjAdmin::edit/$1',['filter' => 'auth']);
$routes->get('/PrjAdmin/(:segment)/delete', 'PrjAdmin::delete/$1',['filter' => 'auth']);

$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/PrjAdmin','PrjAdmin::index',['filter' => 'auth']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
