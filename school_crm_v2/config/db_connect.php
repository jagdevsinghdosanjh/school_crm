<?php
// config/db_connect.php

$envPath = __DIR__ . '/../.env';

if (!file_exists($envPath)) {
    die('Configuration error: .env file missing.');
}

$env = parse_ini_file($envPath);

$host = $env['CRM_DB_HOST'] ?? 'localhost';
$user = $env['CRM_DB_USER'] ?? '';
$pass = $env['CRM_DB_PASS'] ?? '';
$db   = $env['CRM_DB_NAME'] ?? '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Database connection failed.');
}

$conn->set_charset('utf8mb4');
