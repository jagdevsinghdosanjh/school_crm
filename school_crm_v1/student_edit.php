<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require 'db_connect.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $class    = $_POST['class'];

    // Password update only if provided
    if (!empty($_POST['password'])) {
        $password = md5($_POST['password']);
        $update = "UPDATE students SET username='$username', name='$name', email='$email', class='$class', password='$password' WHERE id=$id";
    } else {
        $update = "UPDATE students SET username='$username', name='$name', email='$email', class='$class' WHERE id=$id";
    }

    if ($conn->query($update)) {
        header("Location: students_list.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php include 'includes/header.php'; ?>

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

<?php include 'includes/footer.php'; ?>
