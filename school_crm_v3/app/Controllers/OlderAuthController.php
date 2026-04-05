<?php
require_once __DIR__ . '/../Core/Auth.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Session.php';

class AuthController
{
    public function showAdminLogin()
    {
        include __DIR__ . '/../Views/admin/login.php';
    }

    public function processLogin()
    {
        $username = Helpers::sanitize($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $role     = Helpers::sanitize($_POST['role'] ?? '');

        if (Auth::attempt($username, $password, $role)) {
            Helpers::redirect("/school_crm/school_crm_v3/public/dashboard/{$role}");
        }

        echo "<h3>Invalid username or password</h3>";
        echo "<a href=\"/school_crm/school_crm_v3/public/login/{$role}\">Try Again</a>";
    }

    public function logout()
    {
        Auth::logout();
        Helpers::redirect('/school_crm/school_crm_v3/public/');
    }
}
