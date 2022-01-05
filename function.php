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

function tambah($data) {
    global $connect;

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);

    $insert = "INSERT INTO mhs VALUES ('', '$nama', '$nrp')";

    mysqli_query($connect, $insert);

    return mysqli_affected_rows($connect);
}

function hapus($data) {
    global $connect;

    $delete = "DELETE FROM mhs WHERE id = $data";

    mysqli_query($connect, $delete);

    return mysqli_affected_rows($connect);
}

function update($data) {
    global $connect;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);

    $update = "UPDATE mhs SET nama = '$nama', nrp = '$nrp' WHERE id = $id";

    mysqli_query($connect, $update);

    return mysqli_affected_rows($connect);
}

?>