<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <header>
    <?php include 'assets/nav/navbar.php'; ?>

        <h1>Profil TIM 5</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="tentang-kami.php">Tentang Kami</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>
    <main>
        <h2>Kontak</h2>
        <div id="contact-container">
            <!-- Formulir Kontak -->
            <form id="contactForm">
                <div>
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
        <div id="message-list">
            <h3>Pesan Terkirim:</h3>
            <ul id="messages"></ul>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Profil Tim 5</p>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>
