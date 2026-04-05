<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Project Manager Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">View All Projects (coming soon)</a></li>
    <li><a href="#">Assign Tasks (coming soon)</a></li>
    <li><a href="#">Track Progress (coming soon)</a></li>
    <li><a href="#">Generate Reports (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
