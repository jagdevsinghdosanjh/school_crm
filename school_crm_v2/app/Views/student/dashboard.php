<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Student Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">View Attendance</a></li>
    <li><a href="#">View Marks</a></li>
    <li><a href="#">Download Assignments</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
