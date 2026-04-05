<?php
session_start();
if (!isset($_SESSION['teacher'])) {
    header("Location: teacher_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Teacher Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['teacher']); ?></strong></p>

<ul>
    <li><a href="#">View Students</a></li>
    <li><a href="#">Enter Attendance</a></li>
    <li><a href="#">Upload Marks</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
