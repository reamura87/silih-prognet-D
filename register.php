<?php
// Inisialisasi error message kosong
$error_message = "";

// Proses pendaftaran jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];  // Menambahkan email
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "Semua kolom harus diisi.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Password dan Konfirmasi Password tidak cocok.";
    } else {
        // Hash password sebelum disimpan ke database (pastikan database terhubung)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database (ganti dengan query yang sesuai)
        // $conn = new mysqli("localhost", "username", "password", "database");
        // $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        // if ($conn->query($sql) === TRUE) {
        //     header("Location: login.php"); // Redirect ke halaman login setelah registrasi berhasil
        // } else {
        //     $error_message = "Terjadi kesalahan saat menyimpan data.";
        // }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - SILIH</title>
    <link rel="stylesheet" href="assets/register.css"> <!-- Pastikan path ke CSS benar -->
</head>
<body>
    <header>
        <div class="logo">SILIH</div>
        <nav>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>

    <!-- Registrasi Section -->
    <section class="login-section">
        <div class="login-form">
            <h2>Registrasi</h2>

            <?php if ($error_message != ""): ?>
                <div class="error-message">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label> <!-- Menambahkan email -->
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Konfirmasi Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Daftar</button>
            </form>

            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

            <!-- Tombol Kembali ke Index -->
            <a href="index.php" class="back-button">Kembali ke Beranda</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 SILIH - Sistem Informasi Layanan & Inventaris Himpunan</p>
    </footer>
</body>
</html>
