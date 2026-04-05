<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require 'db_connect.php';

$id = $_GET['id'];

$conn->query("DELETE FROM students WHERE id=$id");

header("Location: students_list.php");
exit();
?>
