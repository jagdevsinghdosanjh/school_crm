<?php
// dba_dashboard.php
session_start();
if (!isset($_SESSION['dba'])) {
    header('Location: dba_login.php');
    exit();
}
include 'includes/header.php';
?>
<h2>DBA Dashboard</h2>
<p>Welcome, <strong><?= htmlspecialchars($_SESSION['dba']); ?></strong></p>
<ul>
    <li><a href="#">Manage Database Users (coming soon)</a></li>
    <li><a href="#">Backup / Restore (coming soon)</a></li>
    <li><a href="#">System Logs (coming soon)</a></li>
</ul>
<p><a href="logout.php">Logout</a></p>
<?php include 'includes/footer.php'; ?>
