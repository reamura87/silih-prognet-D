<html>
<head>
    <title>SILIH - Sistem Peminjaman Inventaris & Fasilitas Himpunan</title>
</head>
<body>
    <h1>SILIH : Sistem Informasi Layanan & Inventaris Himpunan</h1>

    <?php
    date_default_timezone_set('Asia/Makassar');
    echo "<p>Hari ini: " . date("l, d M Y H:i") . "</p>";
    ?>

    <nav>
        <a href="peminjaman/list.php">📋 Daftar Peminjaman</a> | 
        <a href="peminjaman/form.php">➕ Pinjam Fasilitas</a>
    </nav>
</body>
</html>
