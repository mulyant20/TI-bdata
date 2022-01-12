<?php
    require 'application/function.php';

    if ( isset($_POST["tambahTr"]) ){
        if(tambahTransaksi($_POST) > 0) {
            echo "
                <script>
                    document.location.href = 'index.php'
                </script>
            ";
        }
    }

    $sewa = query("SELECT * FROM sewa");
    $kembali = query("SELECT * FROM pengembalian");
    $bayar = query("SELECT * FROM pembayaran");
    $customer = query("SELECT * FROM customer");
    $alatproyek = query("SELECT * FROM alatproyek");

    $keuntungan = query("SELECT SUM(total) FROM pembayaran");
    $jml_transaksi = query("SELECT COUNT(id_sewa) FROM sewa;");
    $jml_customer = query("SELECT COUNT(id_customer) FROM customer");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <nav id="navbar">
        <div class="profile-wrapper">
            <div class="profile-img">
                <img src="assets/image/profile.png" alt="">
            </div>
            <div class="profile-copy">
                <p class="profile-title">Mulyana</p>
                <p class="profile-body">Admin</p>
            </div>
        </div>
        <ul>
            <li class="menu-active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="application/dataCustomer.php">Customer</a>
            </li>
            <li>
                <a href="application/dataAlatproyek.php">Alat proyek</a>
            </li>
            <li>
                <a href="#">Histori</a>
            </li>
        </ul>
    </nav>

    <section id="section" class="body">
        <div class="colomn-left">
            <div class="row-top">
                <div>
                    <p class="card-title">Keuntungan</p>
                    <p class="card-body">Rp. <?= $keuntungan[0]["SUM(total)"]; ?></p>
                </div>
                <div>
                    <p class="card-title">Jumlah sewa</p>
                    <p class="card-body"><?= $jml_transaksi[0]["COUNT(id_sewa)"]; ?></p>
                </div>
                <div>
                    <p class="card-title">Jumlah customer</p>
                    <p class="card-body"><?= $jml_customer[0]["COUNT(id_customer)"]; ?></p>
                </div>
            </div>
            <div class="row-data">
                <div class="row-title">
                    <p class="title-primary">Data sewa</p>
                    <a href="application/detailSewa.php" class="btn btn-secondary btn-detail">Detail</a>
                </div>
                <table>
                    <tr>
                        <th>ID customer</th>
                        <th>ID alat</th>
                        <th>qty</th>
                        <th>tanggal keluar</th>
                        <th>action</th>
                    </tr>
                    <?php foreach($sewa as $row) : ?>
                    <tr class="table-row">
                        <td><?= $row["id_customer"] ?></td>
                        <td><?= $row["id_alat"] ?></td>
                        <td><?= $row["qty"] ?></td>
                        <td><?= $row["tggl_keluar"] ?></td>
                        <td>
                            <a href="./application/editTransaksi.php?id=<?= $row["id_sewa"] ?>" >Edit</a>
                            <a href="./application/hapusTransaksi.php?id=<?= $row["id_sewa"] ?>" >hapus</a>
                        
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="row-data">
                <div class="row-title">
                    <p class="title-primary">Data pengembalian</p>
                </div>
                <table>
                    <tr>
                        <th>ID sewa</th>
                        <th>ID Alat</th>
                        <th>Qty</th>
                        <th>tanggal kembali</th>
                        <th>action</th>
                    </tr>
                    <?php foreach($kembali as $row) : ?>
                    <tr class="table-row">
                        <td><?= $row["id_sewa"] ?></td>
                        <td><?= $row["id_alat"] ?></td>
                        <td><?= $row["qty"] ?></td>
                        <td><?= $row["tggl_kembali"] ?></td>
                        <td>
                            <a href="./application/editTransaksi.php?id=<?= $row["id_sewa"] ?>" >Edit</a>
                            <a href="./application/hapusTransaksi.php?id=<?= $row["id_sewa"] ?>" >hapus</a>   
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="row-data">
                <div class="row-title">
                    <p class="title-primary">Data pembayaran</p>
                </div>
                <table>
                    <tr>
                        <th>pengembalian</th>
                        <th>sewa</th>
                        <th>lama(hari)</th>
                        <th>subtotal</th>
                        <th>total</th>
                    </tr>
                    <?php foreach($bayar as $row) : ?>
                    <tr class="table-row">
                        <td><?= $row["id_kembali"] ?></td>
                        <td><?= $row["id_sewa"] ?></td>
                        <td><?= $row["lama"] ?></td>
                        <td><?= $row["subtotal"] ?></td>
                        <td><?= $row["total"] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <div class="colomn-right">
            <p class="title-secondary">Tambah transaksi</p>
            <form action="" method="post" id="form-tambah">
                <div>
                    <label for="id_sewa">ID</label>
                    <input type="text" name="id_sewa" id="id_sewa">
                </div>
                <div>
                    <div>
                        <label for="id_alat">ID alat</label>
                        <input type="text" list="auto-complete" id="id_alat" name="id_alat">
                        <datalist id="auto-complete">
                            <?php foreach($alatproyek as $i) : ?>
                            <option value="<?= $i["id_alat"] ?>"><?= $i["nama"] ?> <?= $i["merek"] ?> <?= $i["tipe"] ?></option>
                            <?php endforeach ?>
                        </datalist>
                    </div>
                    <div>
                        <label for="kuantitas">QTY</label>
                        <input type="number" name="kuantitas" id="kuantitas">
                    </div>
                </div>
                <div>
                    <label for="id_customer">ID customer</label>
                    <input type="text" list="auto-complete" id="id_customer" name="id_customer">
                    <datalist id="auto-complete">
                        <?php foreach($customer as $i) : ?>
                        <option value="<?= $i["id_customer"] ?>"><?= $i["nama_depan"] ?> <?= $i["nama_tengah"] ?> <?= $i["nama_belakang"] ?></option>
                        <?php endforeach ?>
                    </datalist>

                </div>
                <div>
                    <label for="tggl_keluar">Tanggal</label>
                    <input type="date" name="tggl_keluar" id="tggl_keluar" class="tggl">
                </div>
                <div>
                    <label for="subtotal">Subtotal</label>
                    <input type="number" name="subtotal" id="subtotal">
                </div>
                <button type="submit" name="tambahTr" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </section>
</body>
</html>