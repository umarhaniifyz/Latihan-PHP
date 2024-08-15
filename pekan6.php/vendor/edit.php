<?php 
    require_once '../koneksi.php';

    if(isset($_GET['idedit'])){
        $id = $_GET['idedit'];


        $sql = "SELECT * FROM vendor WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>

<form methode="post" action="list.php">
    <input type="hidden" name="id" value="<?=  $row['id']     ?>">

    <label for="">id</label>
    <input type="text" name="kode" value="<?=   $row['id']   ?>"><br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?=   $row['nama']   ?>"><br>

    <label for="">kota</label>
    <input type="text" name="kota" value="<?=   $row['kota']   ?>"> <br>

    <label for="">kontak</label>
    <input type="number" name="kontak" value="<?=   $row['kontak']   ?>"> <br>


    <button type="submit" name="submit">SAVE</button>

</form>

