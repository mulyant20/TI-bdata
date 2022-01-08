<?php
    require 'function.php';

    $id = $_GET["id"];
    

    if ( isset($_POST["submit"]) ){
        
        if(updateTransaksi($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = '.../index.php';
                </script>
            ";
        }
    }

    $row = query("SELECT * FROM sewa WHERE id_sewa = '$id'")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit sewa</title>
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
        <div class="colomn-left">
        <div class="row-title">
            <p class="title-primary">Edit data alat proyek <?= $row["id_alat"] ?></p>
        </div>
        <form action="" method="post" class="form-edit">
            <input type="hidden" name="id_sewa" value="<?= $row["id_sewa"]; ?>">
            <div>
                <label for="id_customer">depan</label>
                <input
                    type="text"
                    name="id_customer"
                    id="id_customer"
                    placeholder="<?= $row["id_customer"] ?>"
                    value="<?= $row["id_customer"] ?>">
            </div>
             
            <div>
                <label for="id_alat">depan</label>
                <input
                    type="text"
                    name="id_alat"
                    id="idalatr"
                    placeholder="<?= $row["id_alat"] ?>"
                    value="<?= $row["id_alat"] ?>">
            </div>
             
            <div>
                <label for="tggl_keluar">tanggal keluar</label>
                <input
                    type="date"
                    name="tggl_keluar"
                    id="tggl_keluar"
                    placeholder="<?= $row["tggl_keluar"] ?>"
                    value="<?= $row["tggl_keluar"] ?>">
            </div>      
            <div>
                <label for="kuantitas">kuantitas</label>
                <input
                    type="text"
                    name="kuantitas"
                    id="kuantitas"
                    placeholder="<?= $row["kuantitas"] ?>"
                    value="<?= $row["kuantitas"] ?>">
            </div>
             
            <div>
                <label for="subtotal">subtotal</label>
                <input
                    type="text"
                    name="subtotal"
                    id="subtotal"
                    placeholder="<?= $row["subtotal"] ?>"
                    value="<?= $row["subtotal"] ?>">
            </div>
             
            <button type="submit" name="submit" class="btn btn-primary btn-ganti">Ganti</button>
        </form>
    </div>
    </section>
</body>
</html>