<?php
require_once __DIR__ . '/../Core/Session.php';

class HomeController
{
    public function index()
    {
        include __DIR__ . '/../Views/shared/header.php';

        echo "<h2>Welcome to School CRM</h2>";
        echo "<p>This is the central landing page for the School CRM (Session 2026–27).</p>";

        if (!Session::get('role')) {
            echo "<p>Please choose a login option from the sidebar.</p>";
        } else {
            $role = Session::get('role');
            $username = htmlspecialchars(Session::get('username'));
            echo "<p>You are logged in as <strong>{$username}</strong>.</p>";
            echo "<p><a href=\"/school_crm/school_crm_v3/public/dashboard/{$role}\">Go to your Dashboard</a></p>";
        }

        include __DIR__ . '/../Views/shared/footer.php';
    }
}
