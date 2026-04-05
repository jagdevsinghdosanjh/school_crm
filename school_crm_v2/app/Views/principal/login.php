<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Principal Login</h2>

<form action="/login_process.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="role" value="principal">
    <input type="submit" value="Login">
</form>

<?php include __DIR__ . '/../shared/footer.php'; ?>
