<?php
require_once '../koneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>diskon</th>
            <th>Iuran</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?= $row['id'] ?>
            </td>
            <td>
                <?= $row['kode'] ?>
            </td>
            <td>
                <?= $row['nama'] ?>
            </td>
            <td>
                <?= $row['diskon'] ?>
            </td>
            <td>
                <?= $row['iuran'] ?>
            </td>
        </tr>
    </tbody>
</table>