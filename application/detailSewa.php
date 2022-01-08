<?php
    require 'function.php';

    $data = query("SELECT sewa.tggl_keluar, alatproyek.id_alat, alatproyek.nama, alatproyek.merek, alatproyek.tipe, sewa.kuantitas, sewa.subtotal, customer.id_customer, customer.nama_depan FROM sewa JOIN alatproyek ON sewa.id_alat = alatproyek.id_alat JOIN customer ON sewa.id_customer= customer.id_customer WHERE tggl_keluar >= '2021-01-01';");
    
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
    <section class="main-section">
        <div class="colomn-detail">
            <div class="row-data">
                <div class="row-title">
                    <p class="title-primary">Detail sewa</p>
                </div>
                <table class="table-detail">
                    <tr>
                        <th>Tanggal keluar</th>
                        <th>ID alat</th>
                        <th>nama alat</th>
                        <th>merek</th>
                        <th>tipe</th>
                        <th>kuantitas</th>
                        <th>subtotal</th>
                        <th>ID customer</th>
                        <th>nama customer</th>
                    </tr>
                    <?php foreach($data as $row) : ?>
                    <tr>
                        <td><?= $row["tggl_keluar"] ?></td>
                        <td><?= $row["id_alat"] ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["merek"] ?></td>
                        <td><?= $row["tipe"] ?></td>
                        <td><p><?= $row["kuantitas"] ?></p></td>
                        <td><?= $row["subtotal"] ?></td>
                        <td><?= $row["id_customer"] ?></td>
                        <td><?= $row["nama_depan"] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        
    </section>
</body>
</html>