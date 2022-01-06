<?php
    require 'function.php';

    $mhs = query("SELECT * FROM alatproyek");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data alat proyek</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <nav id="navbar">
        <div class="profile-wrapper">
            <div class="profile-img">
                <img src="../assets/image/profile.png" alt="">
            </div>
            <div class="profile-copy">
                <p class="profile-title">Mulyana</p>
                <p class="profile-body">Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li>
                <a href="./dataCustomer.php">Customer</a>
            </li>
            <li  class="menu-active">
                <a href="./dataAlatproyek.php">Alat proyek</a>
            </li>
            <li>
                <a href="#">Histori</a>
            </li>
        </ul>
    </nav>
    <section class="main-section section-produk">
        <div class="row-title">
            <p class="title-primary">Data produk</p>
            <a href="./tambahAlat.php" class="btn btn-secondary btn-detail">Tambah</a>
        </div>
        <div class="produk_wrapper">
            
            <?php foreach($mhs as $row) : ?>
            <div class="produk-card">
                <div class="produk-action">
                    <a href="./editAlatproyek.php?id=<?= $row["id_alat"] ?>">
                        <img src="../assets/image/edit.svg" alt="">
                    </a>
                    <a href="./hapusAlat.php?id=<?= $row["id_alat"] ?>">
                        <img src="../assets/image/hapus.svg" alt="">
                    </a>
                </div>
                <div class="produk-img">
                    <img src="../assets/image/<?= $row["gambar"] ?>" alt="<?= $row["nama"]?>">
                </div>
                <div class="produk-copy">
                    <p class="produk-id"><?= $row["id_alat"] ?></p>
                    <p class="produk-nama"><?= $row["nama"] ?></p>
                    <div class="produk-detail">
                        <p class="produk-merek"><?= $row["merek"] ?></p>
                        <p class="produk-tipe"><?= $row["tipe"] ?></p>
                    </div>
                    <div class="produk-bottom">
                        <p class="produk-harga"><?= $row["harga"] ?></p>
                        <p class="produk-stock"><?= $row["stock"] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>