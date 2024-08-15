<?php 
    require_once '../koneksi.php';

    if(isset($_GET['idedit'])){
        $id = $_GET['idedit'];


        $sql = "SELECT * FROM kartu WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>

<form methode="post" action="list.php">
    <input type="hidden" name="id" value="<?=  $row['id']     ?>">

    <label for="">KODE</label>
    <input type="text" name="kode" value="<?=   $row['kode']   ?>">
    <br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?=   $row['nama']   ?>"><br>

    <label for="">diskon</label>
    <input type="text" name="diskom" value="<?=   $row['diskon']   ?>"> <br>

    <label for="">Iuran</label>
    <input type="number" name="iuran" value="<?=   $row['iuran']   ?>"> <br>

    <br><br>

    <button type="submit" name="submit">SAVE</button>


</form>
