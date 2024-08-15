<form method="POST">
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

$proses = $_POST ['proses'];
$nama_siswa = $_POST ['nama'];
$mata_kuliah = $_POST ['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if(!empty($proses)) {
?>

<?= $proses ?>
Nama Siswa <?= $nama_siswa ?>
<br>Matakuliah <?= $mata_kuliah ?>
<br>nilai UTS <?= $nilai_uts ?>
<br>Nilai Uas <?= $nilai_uas ?>
<br>nilai tugas <?= $nilai_tugas ?>

<?php } ?>
</body>
</html>