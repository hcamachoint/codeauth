<?php namespace Config;

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
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'page-index', 'filter' => 'guest-user']);
$routes->get('/home', 'Home::home', ['as' => 'page-home', 'filter' => 'auth-user']);

$routes->group('user', ['filter' => 'auth-user'], function($routes)
{
	$routes->get('profile', 'User::profile', ['as' => 'user-profile']);
	$routes->match(['get', 'post'], 'update', 'User::update', ['as' => 'user-update']);
	$routes->get('security', 'User::security', ['as' => 'user-security']);
	$routes->post('security/password', 'User::password', ['as' => 'user-password']);
	$routes->post('security/disconnect', 'User::disconnect', ['as' => 'user-disconnect']);
});

$routes->group('auth', function($routes)
{
    $routes->match(['get', 'post'], 'login', 'Auth::login', ['as' => 'user-login', 'filter' => 'guest-user']);
    $routes->match(['get', 'post'], 'register', 'Auth::register', ['as' => 'user-register', 'filter' => 'guest-user']);
		$routes->get('logout', 'Auth::logout', ['as' => 'user-logout', 'filter' => 'auth-user']);
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
