<?php include __DIR__ . '/../shared/header.php'; ?>

<h2>Principal Dashboard</h2>

<p>Welcome, <strong><?= htmlspecialchars(Session::get('username')); ?></strong></p>

<ul>
    <li><a href="#">View Teachers (coming soon)</a></li>
    <li><a href="#">View School Reports (coming soon)</a></li>
    <li><a href="#">Approve Notices (coming soon)</a></li>
    <li><a href="#">School Analytics (coming soon)</a></li>
</ul>

<?php include __DIR__ . '/../shared/footer.php'; ?>
