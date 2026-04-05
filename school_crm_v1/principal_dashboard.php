<?php
session_start();
if (!isset($_SESSION['principal'])) {
    header("Location: principal_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Principal Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['principal']); ?></strong></p>

<ul>
    <li><a href="#">Manage Teachers</a></li>
    <li><a href="#">View Reports</a></li>
    <li><a href="#">School Notices</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
