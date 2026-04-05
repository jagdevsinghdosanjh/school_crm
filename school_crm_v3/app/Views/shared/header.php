<?php
require_once __DIR__ . '/../../Core/Session.php';
Session::start();

$role     = Session::get('role');
$username = Session::get('username');

$base = "/school_crm/school_crm_v3/public";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School CRM – Session 2026–27</title>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/styles.css">
</head>
<body>
<div class="layout">
    <div class="sidebar">
        <div class="sidebar-title">School CRM</div>
        <a href="<?= $base ?>/">Home</a>
        <?php if (!$role): ?>
            <a href="<?= $base ?>/login/admin">Admin</a>
            <!-- later: DBA, Teacher, Student, etc. -->
        <?php else: ?>
            <a href="<?= $base ?>/dashboard/<?= htmlspecialchars($role) ?>">Dashboard</a>
            <a href="<?= $base ?>/logout">Logout (<?= htmlspecialchars($username) ?>)</a>
        <?php endif; ?>
    </div>
    <div class="main">
        <div class="topbar">
            <span>Session 2026–27</span>
        </div>
        <div class="content">
