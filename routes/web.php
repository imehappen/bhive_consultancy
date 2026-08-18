<?php

/** @var \App\Core\Router $router */

$router->get('/', 'HomeController@index');
$router->get('/about', 'AboutController@index');
$router->get('/services', 'ServiceController@index');
$router->get('/projects', 'ProjectController@index');
$router->get('/contact', 'ContactController@index');
$router->post('/contact', 'ContactController@submit');
$router->get('/team', 'TeamController@index');
$router->get('/testimonials', 'TestimonialController@index');
$router->get('/features', 'FeatureController@index');
