<?php
    require 'function.php';

    $id = $_GET["id"];

    if ( isset($_POST["kirim"]) ){
        
        if(updateCustomer($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = './dataCustomer.php';
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

    $row = query("SELECT * FROM customer WHERE id_customer = '$id'")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit customer</title>
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
        <div class="row-title">
            <p class="title-primary">Edit data Customer <?= $row["id_customer"] ?></p>
        </div>
        <form action="" method="post" class="form-edit">
            <input type="hidden" name="id_customer" value="<?= $row["id_customer"]; ?>">
                <div>
                    <label for="nama_depan">depan </label>
                    <input
                        type="text"
                        name="nama_depan"
                        id="nama_depan"
                        placeholder="<?= $row["nama_depan"] ?>"
                        value="<?= $row["nama_depan"] ?>">
                </div>
                <div>
                    <label for="nama_tengah">tengah </label>
                    <input
                        type="text"
                        name="nama_tengah"
                        id="nama_tengah"
                        placeholder="<?= $row["nama_tengah"] ?>"
                        value="<?= $row["nama_tengah"] ?>">
                </div>
                <div>
                    <label for="nama_belakang">belakang </label>
                    <input
                        type="text"
                        name="nama_belakang"
                        id="nama_belakang"
                        placeholder="<?= $row["nama_belakang"] ?>"
                        value="<?= $row["nama_belakang"] ?>">
                </div>
                <div>
                    <label for="jln">jalan </label>
                    <input
                        type="text"
                        name="jln"
                        id="jln"
                        placeholder="<?= $row["jln"] ?>"
                        value="<?= $row["jln"] ?>">
                </div>
                <div>
                    <label for="rt">rt </label>
                    <input
                        type="text"
                        name="rt"
                        id="rt"
                        placeholder="<?= $row["rt"] ?>"
                        value="<?= $row["rt"] ?>">
                </div>
                <div>
                    <label for="rw">rw </label>
                    <input
                        type="text"
                        name="rw"
                        id="rw"
                        placeholder="<?= $row["rw"] ?>"
                        value="<?= $row["rw"] ?>">
                </div>
                <div>
                    <label for="desa">Desa</label>
                    <input
                        type="text"
                        name="desa"
                        id="desa"
                        placeholder="<?= $row["desa"] ?>"
                        value="<?= $row["desa"] ?>">
                </div>
                <div>
                    <label for="kecamatan">Kecamatan</label>
                    <input
                        type="text"
                        name="kecamatan"
                        id="kecamatan"
                        placeholder="<?= $row["kecamatan"] ?>"
                        value="<?= $row["kecamatan"] ?>">
                </div>
                <div>
                    <label for="kabupaten">Kabupaten</label>
                    <input
                        type="text"
                        name="kabupaten"
                        id="kabupaten"
                        placeholder="<?= $row["kabupaten"] ?>"
                        value="<?= $row["kabupaten"] ?>">
                </div>
            <button type="kirim" name="kirim" class="btn btn-primary btn-ganti">Ganti</button>    
        </form>
        </div>
    </section>
</body>
</html>