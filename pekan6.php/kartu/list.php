<?php 
    require_once '../koneksi.php';
?>
<?php 
   $sql = "SELECT * FROM kartu";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form.php" role="button">Create kartu</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>diskon</th>
                    <th>Iuran</th>
                    <th>Action</th>
                </tr>
            </thead>

    
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['diskon']?></td>
                        <td><?=$row['iuran']?></td>
                        <td>
<a class="btn btn-primary" href="view.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
