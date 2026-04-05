<?php
// app/Controllers/PrincipalController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class PrincipalController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('principal')) {
            Helpers::redirect('/login/principal_login.php');
        }

        include __DIR__ . '/../Views/principal/dashboard.php';
    }

    public function loginPage()
    {
        include __DIR__ . '/../Views/principal/login.php';
    }
}
