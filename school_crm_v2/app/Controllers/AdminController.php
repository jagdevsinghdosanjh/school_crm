<?php
// app/Controllers/AdminController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class AdminController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('admin')) {
            Helpers::redirect('/login/admin_login.php');
        }

        include __DIR__ . '/../Views/admin/dashboard.php';
    }

    public function loginPage()
    {
        include __DIR__ . '/../Views/admin/login.php';
    }
}
