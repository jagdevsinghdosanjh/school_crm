<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: student_login.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Student Dashboard</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['student']); ?></strong></p>

<ul>
    <li><a href="#">View Attendance</a></li>
    <li><a href="#">View Marks</a></li>
    <li><a href="#">Download Assignments</a></li>
</ul>

<p><a href="logout.php">Logout</a></p>

<?php include 'includes/footer.php'; ?>
