<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Proses 1</title>


</head>
<body>

<form method="GET">
  Nama : <input type="text" name="nama" value="" size="30"><br/>
  Matakuliah : 
  <select name="matkul">
    <option value="DDP">Dasar-Dasar pemrograman</option>
    <option value="BDI">Basis Data</option>
    <option value="WEB1">Pemrograman web</option>
  </select><br/>
  Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
  Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
  Nilai Praktikum : <input type="text" name="nilai_tugas" value="" size="6"><br>
  <button name="proses">Simpan</button>
</form>
<?php
error_reporting(0);
$proses = $_GET ['proses'];
$nama_siswa = $_GET ['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

?>

<?= $proses ?>
Nama Siswa <?= $nama_siswa ?>
<br>Matakuliah <?= $mata_kuliah ?>
<br>nilai UTS <?= $nilai_uts ?>
<br>Nilai Uas <?= $nilai_uas ?>
<br>nilai tugas <?= $nilai_tugas ?>
</body>
</html>