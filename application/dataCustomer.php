<?php
    require 'function.php';

    $customer = query("SELECT * FROM customer");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data customer</title>
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
            <li class="menu-active">
                <a href="./dataCustomer.php">Customer</a>
            </li>
            <li>
                <a href="./dataAlatproyek.php">Alat proyek</a>
            </li>
            <li>
                <a href="#">Histori</a>
            </li>
        </ul>
    </nav>
    <section id="section" class="main-section">
        <div class="colomn-left">
            <div class="row-data">
                <div class="row-title">
                    <p class="title-primary">Data produk</p>
                    <a href="./tambahCustomer.php" class="btn btn-secondary btn-detail">Tambah</a>
                </div>
                <table class="table-customer">
                    <tr>
                        <th>ID Customer</th>
                        <th>Nama lengkap</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($customer as $row) : ?>
                    <tr>
                        <td><?= $row["id_customer"] ?></td>
                        <td><?= $row["nama_depan"] ?> <?= $row["nama_tengah"] ?> <?= $row["nama_belakang"] ?></td>
                        <td><?= $row["jln"] ?> <?= $row["rt"] ?> <?= $row["rw"] ?> <?= $row["desa"] ?> <?= $row["kecamatan"] ?> <?= $row["kabupaten"] ?></td>
                        <td>
                            <a href="./editCustomer.php?id=<?= $row["id_customer"] ?>">Edit</a>
                            <a href="./hapusCustomer.php?id=<?= $row["id_customer"] ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        
    </section>
</body>
</html>