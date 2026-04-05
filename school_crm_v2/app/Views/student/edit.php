<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Edit Student</h2>

<form method="post">
    Username:<br>
    <input type="text" name="username" value="<?= $student['username'] ?>" required><br><br>

    Name:<br>
    <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>

    Email:<br>
    <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>

    Class:<br>
    <input type="text" name="class" value="<?= $student['class'] ?>"><br><br>

    New Password (optional):<br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Update Student">
</form>

<?php include __DIR__ . '/../shared/footer.php'; ?>
