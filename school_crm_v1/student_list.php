<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require 'db_connect.php';
$result = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>

<?php include 'includes/header.php'; ?>

<h2>Students List</h2>

<p><a href="student_add.php">➕ Add New Student</a></p>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['username']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['class']) ?></td>
        <td>
            <a href="student_edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="student_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

<?php include 'includes/footer.php'; ?>
