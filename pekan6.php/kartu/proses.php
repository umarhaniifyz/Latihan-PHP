<?php 
require_once '../koneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['diskon'];
   $_harga_jual = $_POST['iuran'];


   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode;
   $ar_data[]=$_nama;
   $ar_data[]=$_harga;
   $ar_data[]=$_harga_jual;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_GET['idedit'];
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
   }
   if (isset($_GET['iddel'])){
    $id = $_GET['iddel'];
    $stmt = $dbh->prepare("DELETE FROM kartu WHERE id=$id");
    $stmt->execute();
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php?hal=kartu');
?>