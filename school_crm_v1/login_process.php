<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username']);
    $password = md5($_POST['password']);
    // $role     = $_POST['role'];   
    $role = $_POST['role'] ?? null;// admin, dba, teacher, student, parent, principal, pm

if (!$role) {
    die("Invalid access. Please use a login page.");
}

    // Map roles to their tables
    $tables = [
        "admin"     => "admin",
        "dba"       => "dba",
        "teacher"   => "teachers",
        "student"   => "students",
        "parent"    => "parents",
        "principal" => "principals",
        "pm"        => "project_managers"
    ];

    if (!array_key_exists($role, $tables)) {
        die("Invalid role selected.");
    }

    $table = $tables[$role];

    // Query the correct table
    $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        $_SESSION[$role] = $username;

        // Redirect to correct dashboard
        header("Location: {$role}_dashboard.php");
        exit();

    } else {
        echo "Invalid username or password";
        echo "<br><a href='{$role}_login.php'>Back to Login</a>";
    }
}
?>
