<?php
// app/Controllers/PMController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class PMController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('pm')) {
            Helpers::redirect('/login/pm_login.php');
        }

        include __DIR__ . '/../Views/pm/dashboard.php';
    }

    public function loginPage()
    {
        include __DIR__ . '/../Views/pm/login.php';
    }
}
