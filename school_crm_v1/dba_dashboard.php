<?php
session_start();
if (!isset($_SESSION['dba'])) {
    header("Location: dba_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>DBA Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['dba']); ?></strong></p>

<ul>
    <li><a href="#">Manage Database Users</a></li>
    <li><a href="#">Backup / Restore</a></li>
    <li><a href="#">System Logs</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
