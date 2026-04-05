<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Students List</h2>

<p><a href="/students/student_add.php">+ Add New Student</a></p>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['class']) ?></td>
            <td>
                <a href="/students/student_edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="/students/student_delete.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include __DIR__ . '/../shared/footer.php'; ?>
