<?php
session_start();
if (!isset($_SESSION['parent'])) {
    header("Location: parent_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Parent Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['parent']); ?></strong></p>

<ul>
    <li><a href="#">View Child Attendance</a></li>
    <li><a href="#">View Child Marks</a></li>
    <li><a href="#">School Notices</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
