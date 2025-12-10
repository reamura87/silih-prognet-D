<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILIH - Website Peminjaman Barang</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">SILIH</div>
        
        <nav>
            <a href="#kategori">Kategori</a>
            <a href="peminjaman/list.php">Peminjaman</a>
            <a href="kontak.php">Kontak</a>
        </nav>

        <div class="search-container">
            <input type="text" placeholder="Cari Barang" autofocus>
        </div>

        <div class="header-icons">
            <a href="#cart" title="Keranjang">🛒</a>
            <a href="profile.php" title="Profil">👤</a>
            <a href="login.php" title="Login">Login</a> 
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>WEBSITE<br>PEMINJAMAN<br>BARANG</h1>
            <p>Mulai meminjam barang-barang dari kampus Teknologi Informasi dengan mudah dengan Website Silih</p>
            <a href="peminjaman/list.php" class="cta-button">List Item</a>
        </div>

        <div class="hero-image">
            <div class="furniture-circle">
                <div class="furniture-icon">🪑</div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <?php
        date_default_timezone_set('Asia/Makassar');
        echo "<p>Sistem Informasi Layanan & Inventaris Himpunan | " . date("l, d M Y H:i") . " WITA</p>";
        ?>
    </section>

    <footer>
        <p>&copy; 2025 SILIH - Sistem Informasi Layanan & Inventaris Himpunan</p>
    </footer>
</body>
</html>
