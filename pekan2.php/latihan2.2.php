<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <from method="POST">
        NAMA : <input type="text" name="nama" value="" size="30"/><br/>
        Matakuliah :
        <select name="matkul">
            <option value="DDP">Dasar-Dasar pemograman </option>
            <option value="BDI">Basis data </option>
            <option value="WEB1">Pemograman web </option>
        </select><br/>
        Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
        Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
        Nilai Praktikum : <input type="text" name="nilai_tugas" value="" size="6"><br>
        <button name="proses">simpan</button>

    </from>

<?php
    // jika terjadi eror //
    error_reporting(0);
    $proses = $_POST ['proses'];
    $nama_siswa = $_POST ['nama'];
    $mata_kuliah = $_POST ['matkul'];
    $nilai_uts = $_POST ['nilai_uts'];
    $nilai_uas = $_POST ['niali_uas'];
    $nilai_tugas = $_POST ['nilai_tugas'];

    if(!empty($proses)) {
    ?>

    <?= $proses ?>
    <br>nama siswa <?= $nama_siswa ?>
    <br>Matakuliah <?= $mata_kuliah ?>
    <br>nilai_uts <?= $nilai_uts ?>
    <br>nilai_uas <?= $nilai_uas ?>
    <br>nilai_tugas <?= $nilai_tugas ?>

    <?php } ?>
</body>
</html>