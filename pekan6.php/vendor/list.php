<?php 
    require_once '../koneksi.php';
?>
<?php 
   $sql = "SELECT * FROM vendor";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form.php" role="button">Create vendor</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>nomor</th>
                    <th>kota</th>
                    <th>kontak</th>
                    <th>Action</th>
                </tr>
            </thead>

    
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['nomor']?></td>
                        <td><?=$row['kota']?></td>
                        <td><?=$row['kontak']?></td>
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
