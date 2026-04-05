<?php
// app/Controllers/ParentController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class ParentController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('parent')) {
            Helpers::redirect('/login/parent_login.php');
        }

        include __DIR__ . '/../Views/parent/dashboard.php';
    }

    public function loginPage()
    {
        include __DIR__ . '/../Views/parent/login.php';
    }
}
