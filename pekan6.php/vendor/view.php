<?php 
require_once '../koneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nomor</th>
            <th>kota</th>
            <th>kontak</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['kota']?></td>
            <td><?=$row['kontak']?></td>
        </tr>
    </tbody>
</table>
