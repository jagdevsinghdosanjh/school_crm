<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $class    = $_POST['class'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO students (username, name, email, password, class)
            VALUES ('$username', '$name', '$email', '$password', '$class')";

    if ($conn->query($sql)) {
        header("Location: students_list.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php include 'includes/header.php'; ?>

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

<?php include 'includes/footer.php'; ?>
