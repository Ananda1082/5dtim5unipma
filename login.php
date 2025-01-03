<?php
session_start();

// Fungsi untuk memverifikasi pengguna
function authenticateUser($username, $password) {
    $file = 'users.json';

    if (!file_exists($file)) return false;

    $users = json_decode(file_get_contents($file), true);

    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            return true;
        }
    }
    return false;
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        if (authenticateUser($username, $password)) {
            $_SESSION['user'] = $username;
            header('Location: index.php');
            exit();
        } else {
            $error = "Username atau password salah.";
        }
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
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <main>
        <h2>Login</h2>

        <?php if (!empty($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a>.</p>
    </main>
</body>
</html>
