<?php
require_once __DIR__ . '/../Core/Auth.php';
require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';

class AdminController
{
    public function index()
    {
        if (!Auth::check('admin')) {
            Helpers::redirect('/school_crm/school_crm_v3/public/login/admin');
        }

        include __DIR__ . '/../Views/admin/dashboard.php';
    }
}
