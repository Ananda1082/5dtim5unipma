<?php
// Baca data dari file JSON
$file = 'assets/json/data-profile.json';
$data = [];
if (file_exists($file)) {
    $json = file_get_contents($file);
    $data = json_decode($json, true) ?? [];
}

// Periksa apakah ada parameter pencarian
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

// Filter data jika ada pencarian
if ($searchQuery !== '') {
    $data = array_filter($data, function($profil) use ($searchQuery) {
        return stripos($profil['nama'], $searchQuery) !== false; // Menyesuaikan pencarian dengan nama
    });
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Tim 5</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <?php include 'assets/nav/navbar.php'; ?>
        <h1>Web Profil TIM 5</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="tentang-kami.php">Tentang Kami</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>

    <main>
        <h2>Profil Tim 5</h2>

        <!-- Formulir pencarian -->
        <form action="profil.php" method="get">
            <label for="search">Cari Profil:</label>
            <input type="text" id="search" name="search" value="<?php echo htmlspecialchars($searchQuery); ?>" placeholder="Masukkan nama..." required>
            <button type="submit">Cari</button>
        </form>

        <!-- Menampilkan hasil pencarian atau semua profil -->
        <div class="profil-list">
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $index => $profil) : ?>
                    <div class="profil-item">
                        <h3><?php echo htmlspecialchars($profil['nama']); ?></h3>
                        <p>Email: <?php echo htmlspecialchars($profil['email']); ?></p>
                        <p>Deskripsi: <?php echo nl2br(htmlspecialchars($profil['deskripsi'])); ?></p>
                        <p><small>Dibuat pada: <?php echo $profil['timestamp']; ?></small></p>
                        
                        <!-- Tombol Edit dan Hapus -->
                        <a href="edit-profil.php?index=<?php echo $index; ?>">Edit</a> | 
                        <a href="?hapus=<?php echo $index; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus profil ini?')">Hapus</a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Profil tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Profil Tim 5</p>
    </footer>
</body>
</html>
