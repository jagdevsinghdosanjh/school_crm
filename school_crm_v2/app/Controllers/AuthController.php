<?php
// app/Controllers/AuthController.php

require_once __DIR__ . '/../Core/Auth.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Session.php';

class AuthController
{
    public function showLogin($role)
    {
        $role = Helpers::sanitize($role);

        $allowed = ['admin','dba','teacher','student','parent','principal','pm'];

        if (!in_array($role, $allowed)) {
            die("Invalid role.");
        }

        include __DIR__ . "/../Views/{$role}/login.php";
    }

    public function processLogin()
    {
        Session::start();

        $username = Helpers::sanitize($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $role     = Helpers::sanitize($_POST['role'] ?? '');

        if (Auth::attempt($username, $password, $role)) {
            Helpers::redirect("/dashboards/{$role}_dashboard.php");
        }

        echo "<h3>Invalid username or password</h3>";
        echo "<a href='/login/{$role}_login.php'>Try Again</a>";
    }

    public function logout()
    {
        Auth::logout();
        Helpers::redirect('/index.php');
    }
}
