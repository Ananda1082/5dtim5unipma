<?php
session_start();

// Fungsi untuk menyimpan pengguna baru ke file JSON
function saveUser($user) {
    $file = 'users.json';
    
    if (file_exists($file)) {
        $users = json_decode(file_get_contents($file), true);
    } else {
        $users = [];
    }

    $users[] = $user;
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

// Proses registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        // Simpan pengguna dengan password yang di-hash
        saveUser([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
        $_SESSION['message'] = "Registrasi berhasil. Silakan login.";
        header('Location: login.php');
        exit();
    } else {
        $error = "Username dan password wajib diisi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <main>
        <h2>Registrasi</h2>

        <?php if (!empty($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a>.</p>
    </main>
</body>
</html>
