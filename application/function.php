<?php

$connect = mysqli_connect("localhost", "root","","ptbarokah");


function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahAlat($data) {
    global $connect;

    $id = htmlspecialchars($data["id_alat"]);
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $stock = htmlspecialchars($data["stock"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);
 

    $tambah = "INSERT INTO alatproyek VALUES (
            '$id',
            '$nama',
            '$merek',
            '$tipe',
            '$stock',
            '$harga',
            '$gambar'
        )";

    mysqli_query($connect, $tambah);

    return mysqli_affected_rows($connect);
}

function updateAlat($data) {
    global $connect;

    $id = htmlspecialchars($data["id_alat"]);
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $stock = htmlspecialchars($data["stock"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $update = "UPDATE alatproyek SET
            id_alat = '$id',
            nama = '$nama',
            merek = '$merek',
            tipe = '$tipe',
            stock = '$stock',
            harga = '$harga',
            gambar = '$gambar'

            WHERE id_alat = '$id'";

    mysqli_query($connect, $update);

    return mysqli_affected_rows($connect);
}

function hapusAlat($data) {
    global $connect;

    $delete = "DELETE FROM alatproyek WHERE id_alat = '$data'";

    mysqli_query($connect, $delete);

    return mysqli_affected_rows($connect);
}

function tambahCustomer($data) {
    global $connect;

    $id = htmlspecialchars($data["id"]);
    $nama_depan = htmlspecialchars($data["nama_depan"]);
    $nama_tengah = htmlspecialchars($data["nama_tengah"]);
    $nama_belakang = htmlspecialchars($data["nama_belakang"]);
    $jln = htmlspecialchars($data["jln"]);
    $rt = htmlspecialchars($data["rt"]);
    $rw = htmlspecialchars($data["rw"]);
    $desa = htmlspecialchars($data["desa"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kabupaten = htmlspecialchars($data["kabupaten"]);

    $tambah = "INSERT INTO customer VALUES (
            '$id',
            '$nama_depan',
            '$nama_tengah',
            '$nama_belakang',
            '$jln',
            '$rt',
            '$rw',
            '$desa',
            '$kecamatan',
            '$kabupaten'

        )";

    mysqli_query($connect, $tambah);

    return mysqli_affected_rows($connect);
}

function updateCustomer($data) {
    global $connect;

    $id = htmlspecialchars($data["id_customer"]);
    $nama_depan = htmlspecialchars($data["nama_depan"]);
    $nama_tengah = htmlspecialchars($data["nama_tengah"]);
    $nama_belakang = htmlspecialchars($data["nama_belakang"]);
    $jln = htmlspecialchars($data["jln"]);
    $rt = htmlspecialchars($data["rt"]);
    $rw = htmlspecialchars($data["rw"]);
    $desa = htmlspecialchars($data["desa"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kabupaten = htmlspecialchars($data["kabupaten"]);

    $update = "UPDATE customer SET
            id_customer = '$id',
            nama_depan = '$nama_depan',
            nama_tengah = '$nama_tengah',
            nama_belakang = '$nama_belakang',
            jln = '$jln',
            rt = '$rt',
            rw = '$rw',
            desa = '$desa',
            kecamatan = '$kecamatan',
            kabupaten = '$kabupaten'

            WHERE id_customer = '$id'";

    mysqli_query($connect, $update);

    return mysqli_affected_rows($connect);
}

function hapusCustomer($data) {
    global $connect;

    $delete = "DELETE FROM customer WHERE id_customer = '$data'";

    mysqli_query($connect, $delete);

    return mysqli_affected_rows($connect);
}


function tambahTransaksi($data) {
    global $connect;
    $id_sewa = htmlspecialchars($data["id_sewa"]);
    $id_alat = htmlspecialchars($data["id_alat"]);
    $id_customer = htmlspecialchars($data["id_customer"]);
    $tggl_keluar = htmlspecialchars($data["tggl_keluar"]);
    $kuantitas = htmlspecialchars($data["kuantitas"]);
    $subtotal = htmlspecialchars($data["subtotal"]);

    
    $tambah = "INSERT INTO sewa VALUES (
            '$id_sewa',
            '$id_alat',
            '$id_customer',
            '$tggl_keluar',
            $kuantitas,
            $subtotal
        )";
    mysqli_query($connect, $tambah);
    return mysqli_affected_rows($connect);
}

function updateTransaksi($data) {}

?>