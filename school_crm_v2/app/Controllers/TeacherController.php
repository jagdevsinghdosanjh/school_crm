<?php
// app/Controllers/TeacherController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class TeacherController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('teacher')) {
            Helpers::redirect('/login/teacher_login.php');
        }

        include __DIR__ . '/../Views/teacher/dashboard.php';
    }

    public function loginPage()
    {
        include __DIR__ . '/../Views/teacher/login.php';
    }
}
