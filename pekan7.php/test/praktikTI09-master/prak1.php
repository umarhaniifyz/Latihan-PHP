<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form method="POST">
  Nama : <input type="text" name="nama" value="" size="30"><br/>
  Nilai <input type="text" name="nilai" value="" size="6"><br>
 
  <button name="proses">Simpan</button>
</form>

<?php
$nama = $_POST ['nama'];
$nilai = $_POST ['nilai'];
$tombol = $_POST['proses'];


$ket = ($nilai >= 55)? "lulus":"gagal";

if($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if($nilai >= 70 && $nilai <= 84) $grade = 'B';
else if ($nilai >= 56 && $nilai <= 69 ) $grade = 'C';
else if ($nilai >= 36 && $nilai <= 55 ) $grade = 'D';
else if ($nilai >= 0 && $nilai <= 35 ) $grade = 'E';
else $grade = '';

switch ($grade) {
  case 'A': $predikat = 'Sangat Baik'; break;
  case 'B': $predikat = 'Baik'; break;
  case 'C': $predikat = 'Cukup'; break;
  case 'D': $predikat = 'Kurang Baik'; break;
  case 'E': $predikat = 'Tidak Baik'; break;
  
  default: $predikat = '';
}
if(isset($tombol)){ ?>

<?= $nama ?>

<br><?= $nilai ?>
<br><?= $ket ?>
<br><?= $grade ?>
<?php } ?>

</body>
</html>