<?php
    require 'function.php';

    $id = $_GET["id"];

    if ( isset($_POST["kirim"]) ){
        
        if(updateAlat($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = './dataAlatproyek.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.reload();
                </script>
            ";
        }
    }

    $row = query("SELECT * FROM alatproyek WHERE id_alat = '$id'")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Alat proyek</title>
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
        <input type="hidden" name="id_alat" value="<?= $row["id_alat"]; ?>">
            <div>
                <label for="nama">nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    placeholder="<?= $row["nama"] ?>"
                    value="<?= $row["nama"] ?>">
            </div>
            <div>
                <label for="merek">merek</label>
                <input
                    type="text"
                    name="merek"
                    id="merek"
                    placeholder="<?= $row["merek"] ?>"
                    value="<?= $row["merek"] ?>">
            </div>
            <div>
                <label for="tipe">tipe</label>
                <input
                    type="text"
                    name="tipe"
                    id="tipe"
                    placeholder="<?= $row["tipe"] ?>"
                    value="<?= $row["tipe"] ?>">
            </div>
            <div>
                <label for="harga">stock</label>
                <input
                    type="number"
                    name="stock"
                    id="stock"
                    placeholder="<?= $row["stock"] ?>"
                    value="<?= $row["stock"] ?>">
            </div>
            <div>
                <label for="harga">harga</label>
                <input
                    type="number"
                    name="harga"
                    id="harga"
                    placeholder="<?= $row["harga"] ?>"
                    value="<?= $row["harga"] ?>">
            </div>
            <div>
                <label for="gambar">gambar</label>
                <input
                    type="text"
                    name="gambar"
                    id="gambar"
                    placeholder="<?= $row["gambar"] ?>"
                    value="<?= $row["gambar"] ?>">
            </div>
            
        <button type="kirim" name="kirim" class="btn btn-primary btn-ganti">Ganti</button>    
        </form>
        </div>
    </section>
</body>
</html>