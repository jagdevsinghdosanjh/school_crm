<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Admin Login</h2>

<form action="/school_crm/school_crm_v3/public/login" method="post">
    <input type="hidden" name="role" value="admin">

    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<?php include __DIR__ . '/../shared/footer.php'; ?>
