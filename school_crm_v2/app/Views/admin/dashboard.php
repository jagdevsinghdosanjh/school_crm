<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Admin Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="/students/student_list.php">Manage Students</a></li>
    <li><a href="#">Manage Teachers (coming soon)</a></li>
    <li><a href="#">Manage Classes (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
