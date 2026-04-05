<?php
// config/routes.php

require_once __DIR__ . '/../app/Core/Router.php';

$router = new Router();

// Home
$router->get('/', 'HomeController@index');

// Login pages
$router->get('/login/admin', 'AuthController@showAdminLogin');
// later: /login/dba, /login/teacher, etc.

// Login processing
$router->post('/login', 'AuthController@processLogin');

// Dashboards
$router->get('/dashboard/admin', 'AdminController@index');
// later: /dashboard/dba, /dashboard/teacher, etc.

// Logout
$router->get('/logout', 'AuthController@logout');

return $router;
