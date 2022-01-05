<?php
    require 'function.php';

    if ( isset($_POST["submit"]) ){
        if(tambahCustomer($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil');
                    document.location.href = 'index.php';
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
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="id">id : </label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="nama_depan">nama depan : </label>
            <input type="text" name="nama_depan" id="nama_depan">
        </div>
        <div>
            <label for="nama_tengah">nama tengah : </label>
            <input type="text" name="nama_tengah" id="nama_tengah">
        </div>
        <div>
            <label for="nama_belakang">nama belakang : </label>
            <input type="text" name="nama_belakang" id="nama_belakang">
        </div>
        <div>
            <label for="jln">jalan : </label>
            <input type="text" name="jln" id="jln">
        </div>
        <div>
            <label for="rt">rt : </label>
            <input type="text" name="rt" id="rt">
        </div>
        <div>
            <label for="rw">rw : </label>
            <input type="text" name="rw" id="rw">
        </div>
        <div>
            <label for="desa">desa : </label>
            <input type="text" name="desa" id="desa">
        </div>
        <div>
            <label for="kecamatan">kecamatan : </label>
            <input type="text" name="kecamatan" id="kecamatan">
        </div>
        <div>
            <label for="kabupaten">kabupaten : </label>
            <input type="text" name="kabupaten" id="kabupaten">
        </div>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>