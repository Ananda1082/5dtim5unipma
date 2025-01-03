
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav>
    <?php if (isset($_SESSION['user'])) : ?>
        <a href="logout.php">Logout (<?php echo htmlspecialchars($_SESSION['user']); ?>)</a>
    <?php else : ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif; ?>
</nav>
