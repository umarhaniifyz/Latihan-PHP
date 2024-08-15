<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <form method="GET">
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

</form>

    <?php
    // jika terjadi eror //
    error_reporting(0);
    $proses = $_GET ['proses'];
    $nama_siswa = $_GET ['nama'];
    $mata_kuliah = $_GET ['matkul'];
    $nilai_uts = $_GET ['nilai_uts'];
    $nilai_uas = $_GET ['niali_uas'];
    $nilai_tugas = $_GET ['nilai_tugas'];

    ?>

    <?= $proses ?>
    <br>nama siswa <?= $nama_siswa ?>
    <br>Matakuliah <?= $mata_kuliah ?>
    <br>nilai_uts <?= $nilai_uts ?>
    <br>nilai_uas <?= $nilai_uas ?>
    <br>nilai_tugas <?= $nilai_tugas ?>

</body>
</html>