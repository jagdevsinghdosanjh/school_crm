<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Teacher Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">View Students (coming soon)</a></li>
    <li><a href="#">Enter Attendance (coming soon)</a></li>
    <li><a href="#">Upload Marks (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
