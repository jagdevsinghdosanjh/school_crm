<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<?php include 'includes/header.php'; ?>

<h2>Admin Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['admin']); ?></strong></p>

<ul>
    <li><a href="#">Manage Students (future)</a></li>
    <li><a href="#">Manage Teachers (future)</a></li>
    <li><a href="#">Manage Classes (future)</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
