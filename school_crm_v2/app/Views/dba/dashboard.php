<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">Manage Database Users (coming soon)</a></li>
    <li><a href="#">Backup / Restore (coming soon)</a></li>
    <li><a href="#">System Logs (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
