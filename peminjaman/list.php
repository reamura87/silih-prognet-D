<?php
$items = [
    ["nama" => "Mic", "stok" => 5, "img" => "../assets/img/mic.png"],
    ["nama" => "HT", "stok" => 3, "img" => "../assets/img/ht.png"],
    ["nama" => "Proyektor", "stok" => 2, "img" => "../assets/img/proyektor.png"],
    ["nama" => "Screen", "stok" => 1, "img" => "../assets/img/screen.png"],
    ["nama" => "Meja Himpunan", "stok" => 4, "img" => "../assets/img/meja.png"],
    ["nama" => "Bel Cerdas Cermat", "stok" => 2, "img" => "../assets/img/bel.png"],
    ["nama" => "Kabel Jack", "stok" => 10, "img" => "../assets/img/jack.png"],
    ["nama" => "Kabel HDMI", "stok" => 7, "img" => "../assets/img/hdmi.png"],
    ["nama" => "Splitter", "stok" => 3, "img" => "../assets/img/splitter.png"],
    ["nama" => "Kain Hitam", "stok" => 6, "img" => "../assets/img/kain.png"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang – SILIH</title>
    <link rel="stylesheet" href="../assets/list.css">
</head>
<body>

<header>
    <div class="logo">SILIH</div>
    <nav>
        <a href="../index.php">Beranda</a>
        <a href="list.php">List Barang</a>
        <a href="../kontak.php">Kontak</a>
        <a href="../profile.php">Profil</a>
    </nav>
</header>

<h1 class="judul">Daftar Barang Tersedia</h1>

<div class="container">

    <?php foreach ($items as $item): ?>
        <div class="card">
            <img src="<?= $item['img']; ?>" alt="<?= $item['nama']; ?>">
            <h2><?= $item["nama"]; ?></h2>
            <p class="stok">Stok: <strong><?= $item["stok"]; ?></strong></p>
            <a href="form.php?nama=<?= urlencode($item['nama']); ?>&stok=<?= $item['stok']; ?>" class="btn-pinjam">Pinjam</a>
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>
