<?php
require_once __DIR__ . '/../../Core/Session.php';
Session::start();

$role = Session::get('role');
$username = Session::get('username');

// IMPORTANT: Correct base path for your WAMP folder
$base = "/school_crm_v2/public";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School CRM – Session 2026–27</title>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>


<body>

<div class="layout">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-title">School CRM</div>

        <a href="<?= $base ?>/index.php">🏠 Home</a>

        <?php if (!$role): ?>
            <a href="<?= $base ?>/login/admin_login.php">👑 Admin</a>
            <a href="<?= $base ?>/login/dba_login.php">🗄 DBA</a>
            <a href="<?= $base ?>/login/teacher_login.php">📘 Teacher</a>
            <a href="<?= $base ?>/login/student_login.php">🎓 Student</a>
            <a href="<?= $base ?>/login/parent_login.php">👪 Parent</a>
            <a href="<?= $base ?>/login/principal_login.php">🏫 Principal</a>
            <a href="<?= $base ?>/login/pm_login.php">📊 PM</a>
        <?php else: ?>
            <a href="<?= $base ?>/dashboards/<?= $role ?>_dashboard.php">📂 Dashboard</a>
            <a href="<?= $base ?>/logout.php">🚪 Logout (<?= htmlspecialchars($username) ?>)</a>
        <?php endif; ?>
    </div>

    <!-- Main Content -->
    <div class="main">
        <div class="topbar">
            <span>Session 2026–27</span>
        </div>

        <div class="content">
