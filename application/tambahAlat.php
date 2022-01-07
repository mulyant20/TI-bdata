<?php
    require 'function.php';

    if ( isset($_POST["submit"]) ){
        if(tambahAlat($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil');
                    document.location.href = './dataAlatproyek.php';
                </script>
            ";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
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
            <li class="menu-active">
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
                <p class="title-primary">Edit data Alat</p>
            </div>
            <form action="" method="post" class="form-edit">
                <div>
                    <label for="id_alat">ID</label>
                    <input type="text" name="id_alat" id="id_alat">
                </div>
                <div>
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div>
                    <label for="merek">merek</label>
                    <input type="text" name="merek" id="merek">
                </div>
                <div>
                    <label for="tipe">tipe</label>
                    <input type="text" name="tipe" id="tipe">
                </div>
                <div>
                    <label for="stock">stock</label>
                    <input type="number" name="stock" id="stock">
                </div>
                <div>
                    <label for="harga">harga</label>
                    <input type="text" name="harga" id="harga">
                </div>
                <div>
                    <label for="gambar">gambar</label>
                    <input type="text" name="gambar" id="gambar">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-ganti">Tambah</button>
            </form>
        </div>
    </section>
</body>
</html>