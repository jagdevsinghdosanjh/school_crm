<?php
// app/Core/Auth.php

require_once __DIR__ . '/Session.php';
require_once __DIR__ . '/Database.php';

class Auth
{
    public static function attempt($username, $password, $role)
    {
        $db = Database::getInstance()->getConnection();

        $roleMap = [
            'admin'     => 'admin',
            'dba'       => 'dba',
            'teacher'   => 'teachers',
            'student'   => 'students',
            'parent'    => 'parents',
            'principal' => 'principals',
            'pm'        => 'project_managers',
        ];

        if (!isset($roleMap[$role])) {
            return false;
        }

        $table = $roleMap[$role];

        $stmt = $db->prepare("SELECT id, username, password FROM {$table} WHERE username = ? LIMIT 1");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                Session::set('user_id', $row['id']);
                Session::set('username', $row['username']);
                Session::set('role', $role);
                return true;
            }
        }

        return false;
    }

    public static function check($role)
    {
        Session::start();
        return Session::get('role') === $role;
    }

    public static function logout()
    {
        Session::destroy();
    }
}
