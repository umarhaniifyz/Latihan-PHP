<?php 
    require_once '../koneksi.php';

    // mendapatkan nilai dari paremeter id pada url
    $delete = $_GET['iddel'];

    // perintah sql
    $sql ="DELETE FROM kartu WHERE id = ?";
    
    // menyiapkan statmen 
    $stmt = $dbh->prepare($sql);

    // mengeksekusi statmen
    $stmt->execute([$delete]);



    header('location:list.php');
?>