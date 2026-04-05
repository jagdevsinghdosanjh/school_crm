<?php
session_start();
if (!isset($_SESSION['pm'])) {
    header("Location: pm_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Project Manager Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['pm']); ?></strong></p>

<ul>
    <li><a href="#">Manage Projects</a></li>
    <li><a href="#">Assign Tasks</a></li>
    <li><a href="#">View Reports</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
