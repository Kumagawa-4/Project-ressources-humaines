<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/inscription','Inscription_Controller::Inscription_views') ;

$routes->post('/submit-form', 'Main_Controller::FormSubmit');

$routes->post('/view_controller_result', 'Main_Controller::inscription_submit_view');

$routes->get('/generationAutomatique', 'Generation_Controller::indexAuto');

$routes->get('/generationManuelle', 'Generation_Controller::indexManuel');


 