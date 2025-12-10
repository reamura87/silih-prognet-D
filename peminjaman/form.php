<?php
$item_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$item_stok = isset($_GET['stok']) ? $_GET['stok'] : 0;

$error_message = "";

if (isset($_POST['pinjam'])) {
    $jumlah = $_POST['jumlah'];

    if ($jumlah < 1 || $jumlah > $item_stok) {
        $error_message = "Jumlah yang dipinjam melebihi stok yang tersedia.";
    } else {
        $success_message = "Barang '$item_nama' berhasil dipinjam sebanyak $jumlah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang – SILIH</title>
    <link rel="stylesheet" href="../assets/form.css">
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

<h1 class="judul">Form Peminjaman Barang</h1>

<div class="form-container">
    <?php if (!empty($error_message)): ?>
        <div class="error-message">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($success_message)): ?>
        <div class="success-message">
            <?php echo $success_message; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="item_nama">Nama Barang:</label>
            <input type="text" id="item_nama" name="item_nama" value="<?= $item_nama; ?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="stok">Stok Tersedia:</label>
            <input type="number" id="stok" name="stok" value="<?= $item_stok; ?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="jumlah">Jumlah yang ingin dipinjam:</label>
            <input type="number" id="jumlah" name="jumlah" min="1" max="<?= $item_stok; ?>" required>
        </div>
        
        <button type="submit" name="pinjam">Pinjam</button>
    </form>
</div>

</body>
</html>
