<?php
    require 'function.php';

    $mhs = query("SELECT * FROM sewa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>id_alat</th>
            <th>id_customer</th>
            <th>tanggal keluar</th>
            <th>tanggal kembali</th>
            <th>kuantitas</th>
            <th>subtotal</th>
            <th>action</th>
        </tr>
        <?php foreach($mhs as $row) : ?>
        <tr>
            <td><?= $row["id_sewa"] ?></td>
            <td><?= $row["id_alat"] ?></td>
            <td><?= $row["id_customer"] ?></td>
            <td><?= $row["tggl_keluar"] ?></td>
            <td><?= $row["tggl_kembali"] ?></td>
            <td><?= $row["kuantitas"] ?></td>
            <td><?= $row["subtotal"] ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"] ?>">edit</a>
                <a href="hapus.php?id=<?= $row["id"] ?>">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="tambahCustomer.php">tambah customer</a>
</body>
</html>