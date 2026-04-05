<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Add Student</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username" required><br><br>

    Name:<br>
    <input type="text" name="name" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Class:<br>
    <input type="text" name="class"><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Add Student">
</form>

<?php include __DIR__ . '/../shared/footer.php'; ?>
