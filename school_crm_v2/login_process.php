<?php
// login_process.php
session_start();
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$role     = $_POST['role'] ?? null;

if ($username === '' || $password === '' || !$role) {
    exit('Invalid request. Please use a proper login form.');
}

// Map roles to tables and session keys
$roleMap = [
    'admin'     => ['table' => 'admin',            'session_key' => 'admin'],
    'dba'       => ['table' => 'dba',              'session_key' => 'dba'],
    'teacher'   => ['table' => 'teachers',         'session_key' => 'teacher'],
    'student'   => ['table' => 'students',         'session_key' => 'student'],
    'parent'    => ['table' => 'parents',          'session_key' => 'parent'],
    'principal' => ['table' => 'principals',       'session_key' => 'principal'],
    'pm'        => ['table' => 'project_managers', 'session_key' => 'pm'],
];

if (!isset($roleMap[$role])) {
    exit('Invalid role selected.');
}

$table       = $roleMap[$role]['table'];
$sessionKey  = $roleMap[$role]['session_key'];

// Prepared statement
$sql = "SELECT id, username, password FROM {$table} WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    exit('Query error.');
}

$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
    // Expect password stored using password_hash()
    if (password_verify($password, $row['password'])) {
        // Regenerate session ID for security
        session_regenerate_id(true);
        $_SESSION[$sessionKey] = $row['username'];
        $_SESSION['user_id']   = $row['id'];
        $_SESSION['role']      = $role;

        header("Location: {$role}_dashboard.php");
        exit();
    }
}

echo 'Invalid username or password.<br>';
echo "<a href=\"{$role}_login.php\">Back to Login</a>";
