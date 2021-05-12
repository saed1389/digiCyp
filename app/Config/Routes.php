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
$routes->get('lang/{locale}', 'Language::index');
$routes->get('about-us-digital-marketing-agency', 'Page::about');
$routes->get('local-SEO', 'Page::localSeo');
$routes->get('Email-Marketing', 'Page::emailMarketing');
$routes->get('Social-Media-Marketing', 'Page::socialMediaMarketing');
$routes->get('search-engine-optimization-seo', 'Page::SearchEO');
$routes->get('Website-Design', 'Page::webDesign');
$routes->get('Video-Editing-Services', 'Page::videoEdit');
$routes->get('digital-marketing-services', 'Page::services');
$routes->get('blog', 'Page::blog');
$routes->get('references', 'Page::references');
$routes->match(['get', 'post'],'contact', 'Page::contact');

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
