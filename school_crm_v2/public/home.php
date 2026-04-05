<?php
// public/index.php
require_once __DIR__ . '/../app/Core/Session.php';
Session::start();

include __DIR__ . '/../app/Views/shared/header.php';
?>

<h2>Welcome to School CRM</h2>

<p>This is the central landing page for the School CRM (Session 2026–27).</p>

<?php if (!Session::get('role')): ?>
    <p>Please choose a login option from the navigation bar above.</p>
<?php else: ?>
    <p>You are logged in as <strong><?= htmlspecialchars(Session::get('username')); ?></strong>.</p>
    <p><a href="/dashboards/<?= Session::get('role') ?>_dashboard.php">Go to your Dashboard</a></p>
<?php endif; ?>

<?php
include __DIR__ . '/../app/Views/shared/footer.php';
?>
