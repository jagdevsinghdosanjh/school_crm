<?php include '../../app/Views/shared/header.php'; ?>

<h2>Admin Login</h2>
<form action="/school_crm_v2/public/login" method="post">
<!-- <form action="/login_process.php" method="post"> -->
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="role" value="admin">
    <input type="submit" value="Login">
</form>

<?php include '../../app/Views/shared/footer.php'; ?>
