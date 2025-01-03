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
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <header>
    <?php include 'assets/nav/navbar.php'; ?>

        <h1>Profil TIM 5</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="tentang-kami.php" aria-current="page">Tentang Kami</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>
    <main>
        <h2>Tentang Kami</h2>
        <div id="about-container"></div>
    </main>
    <footer>
        <p>&copy; 2024 Profil Tim 5</p>
    </footer>
    <script>
        // Script untuk menambahkan nama anggota tim secara dinamis
        document.addEventListener("DOMContentLoaded", () => {
            const aboutContainer = document.getElementById("about-container");

            // Data anggota tim
            const teamMembers = [
                { name: "Ananda Muhamad Prasetyo", id: "2205101082" },
                { name: "Syahrul Reza Destianto", id: "2205101079" },
                { name: "Agus Rudi Setiawan", id: "2205101089" },
                { name: "Bryan Malvino S.A.P", id: "2205101077" },
                { name: "Nur Aulia", id: "2205101084" }
            ];
            
            // Menampilkan informasi anggota tim di halaman
            teamMembers.forEach(member => {
                const memberDiv = document.createElement("div");
                memberDiv.innerHTML = `
                    <h3>${member.name}</h3>
                    <p>NIM: ${member.id}</p>
                `;
                aboutContainer.appendChild(memberDiv);
            });
        });
       
    </script>
</body>
</html>

