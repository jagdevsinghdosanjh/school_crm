<?php
session_start();
if (isset($_SESSION['pm'])) {
    header("Location: pm_dashboard.php");
    exit();
}
?>

<?php include 'includes/header.php'; ?>

<h2>Project Manager Login</h2>

<form action="login_process.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="role" value="pm">

    <input type="submit" value="Login">
</form>

<?php include 'includes/footer.php'; ?>
