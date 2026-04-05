<?php
// app/Core/Database.php

class Database
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
        require __DIR__ . '/../../config/db_connect.php';
        $this->conn = $conn;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
