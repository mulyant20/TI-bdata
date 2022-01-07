<?php
    require 'function.php';

    if ( isset($_POST["submit"]) ){
        if(tambahCustomer($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil');
                    document.location.href = './dataCustomer.php';
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
    <title>Tambah customer</title>
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
                <p class="title-primary">Edit data customer</p>
            </div>

            <form action="" method="post" class="form-edit">
                <div>
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id">
                </div>
                <div>
                    <label for="nama_depan">nama depan</label>
                    <input type="text" name="nama_depan" id="nama_depan">
                </div>
                <div>
                    <label for="nama_tengah">nama tengah</label>
                    <input type="text" name="nama_tengah" id="nama_tengah">
                </div>
                <div>
                    <label for="nama_belakang">nama belakang</label>
                    <input type="text" name="nama_belakang" id="nama_belakang">
                </div>
                <div>
                    <label for="jln">jalan</label>
                    <input type="text" name="jln" id="jln">
                </div>
                <div>
                    <label for="rt">rt</label>
                    <input type="text" name="rt" id="rt">
                </div>
                <div>
                    <label for="rw">rw</label>
                    <input type="text" name="rw" id="rw">
                </div>
                <div>
                    <label for="desa">desa</label>
                    <input type="text" name="desa" id="desa">
                </div>
                <div>
                    <label for="kecamatan">kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan">
                </div>
                <div>
                    <label for="kabupaten">kabupaten</label>
                    <input type="text" name="kabupaten" id="kabupaten">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-ganti">Tambah</button>
            </form>
        </div>
    </section>
</body>
</html>