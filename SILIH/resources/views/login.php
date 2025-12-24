<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit();
}

$error_message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi database
    include('db.php');
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    } else {
        $error_message = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SILIH</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    <header>
        <div class="logo">SILIH</div>
        <nav>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-form">
            <h2>Login</h2>

            <?php if ($error_message != ""): ?>
                <div class="error-message">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" name="login">Login</button>
            </form>

            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

            <!-- Tombol Kembali ke Index -->
            <a href="index.php" class="back-button">Kembali ke Beranda</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 SILIH - Sistem Informasi Layanan & Inventaris Himpunan</p>
    </footer>
</body>
</html>
