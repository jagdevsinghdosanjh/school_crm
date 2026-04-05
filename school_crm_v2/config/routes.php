<?php

// Load Router
require_once __DIR__ . '/../app/Core/Router.php';

$router = new Router();

/*
|--------------------------------------------------------------------------
| LOGIN ROUTES
|--------------------------------------------------------------------------
*/

// Show login pages
$router->get('/login/admin', 'AuthController@showAdminLogin');
$router->get('/login/dba', 'AuthController@showDBALogin');
$router->get('/login/teacher', 'AuthController@showTeacherLogin');
$router->get('/login/student', 'AuthController@showStudentLogin');
$router->get('/login/parent', 'AuthController@showParentLogin');
$router->get('/login/principal', 'AuthController@showPrincipalLogin');
$router->get('/login/pm', 'AuthController@showPMLogin');

// Process login (POST)
$router->post('/login', 'AuthController@processLogin');

/*
|--------------------------------------------------------------------------
| DASHBOARD ROUTES
|--------------------------------------------------------------------------
*/

$router->get('/dashboard/admin', 'AdminController@index');
$router->get('/dashboard/dba', 'DBAController@index');
$router->get('/dashboard/teacher', 'TeacherController@index');
$router->get('/dashboard/student', 'StudentController@index');
$router->get('/dashboard/parent', 'ParentController@index');
$router->get('/dashboard/principal', 'PrincipalController@index');
$router->get('/dashboard/pm', 'PMController@index');

return $router;
