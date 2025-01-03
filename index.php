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
    <title>Beranda</title>
    <link rel="stylesheet" href="assets/css/styles.css">
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
        <h2>Selamat Datang</h2>
        <p>Ini adalah profile tentang TIM 5 pada UAS pemrograman WEB.</p>
        <div style="text-align: center; margin: 20px 0;">
        <img src="assets/imagesa/tim5.jpg" alt="Profil Tim 5">
    </div>
        <h3>Tambah Data Profil</h3>
        <form action="tambah-data.php" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="deskripsi">Deskripsi:</label><br>
            <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" required></textarea><br><br>

            <button type="submit">Tambah Data</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Profil Tim 5</p>
    </footer>
</body>
</html>

