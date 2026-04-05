<?php
// app/Controllers/DBAController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';

class DBAController
{
    public function dashboard()
    {
        Session::start();

        if (!Auth::check('dba')) {
            Helpers::redirect('/login/dba_login.php');
        }

        include __DIR__ . '/../Views/dba/dashboard.php';
    }

    // Placeholder for future DBA tools
    public function manageUsers()
    {
        echo "<h2>Manage Database Users — Coming Soon</h2>";
    }

    public function backupRestore()
    {
        echo "<h2>Backup / Restore — Coming Soon</h2>";
    }

    public function systemLogs()
    {
        echo "<h2>System Logs — Coming Soon</h2>";
    }
}
