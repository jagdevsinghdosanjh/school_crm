<?php
// db_connect.php

// Load environment variables from .env
$envPath = __DIR__ . '/.env';
if (!file_exists($envPath)) {
    die('Configuration error: .env file missing.');
}

$env = parse_ini_file($envPath);
if (!$env) {
    die('Configuration error: unable to read .env file.');
}

$servername = $env['CRM_DB_HOST'] ?? 'localhost';
$username   = $env['CRM_DB_USER'] ?? '';
$password   = $env['CRM_DB_PASS'] ?? '';
$dbname     = $env['CRM_DB_NAME'] ?? '';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection failed.');
}

$conn->set_charset('utf8mb4');
