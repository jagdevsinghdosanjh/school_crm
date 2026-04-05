<?php
require_once __DIR__ . '/../app/Core/Session.php';
require_once __DIR__ . '/../config/routes.php';

Session::start();
$router->dispatch();
