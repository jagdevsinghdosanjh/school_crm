<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Parent Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">View Child Attendance (coming soon)</a></li>
    <li><a href="#">View Child Marks (coming soon)</a></li>
    <li><a href="#">View Notices (coming soon)</a></li>
    <li><a href="#">Message Teacher (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
