<?php
// app/Core/Database.php

class Database
{
    private static ?Database $instance = null;
    private mysqli $conn;

    private function __construct()
    {
        require __DIR__ . '/../../config/db_connect.php';
        $this->conn = $conn;
    }

    public static function getInstance(): Database
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): mysqli
    {
        return $this->conn;
    }
}
