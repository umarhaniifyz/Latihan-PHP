<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<?php

$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
$ar_skill = ["HTML" =>10, "CSS" =>10, "Javascript" =>30, "RWDBoostrap"=>20, "PHP"=>30, "Python"=>30, "JAVA" =>50];

?>

    <fieldset style="background-color: aquamarine;">
        <legend>Form Registrasi IT Club Data Science</legend>

        <table>
            <tr>
                <th>Form Registrasi</th>
            </tr>
            <tr>
                <th><form method="POST"></th>
            </tr>

           <tr>
            <td>
                Nim 
            </td>
            <td>
                <input type="text" .name="Nim" .value="" size="30"></td>
            </td>

           </tr>
           <tr>
                <td>
                    NAMA 
                </td>
                <td>
                     <input type="text" name="nama" value="" size="30"/><br/>
                </td>
           </tr>
           <tr>
                <td>
                 Jenis Kelamin 
                </td>
                 <td>
                    <input type="radio" name="nama" value="" size="30">Laki-Laki
                    <input type="radio" name="nama" value="" size="30">Perempuan
                </td>
           </tr>
           <tr>
            <td>
                program Studi :
            </td>
            <td>
             Matakuliah :
                <select name=prodi">
                <?php
                    foreach($ar_prodi as $prodi => $p){ ?>

                    <option value="<?= $prodi ?>"><?= $p ?></option>
                       
                   <?php }?> 
                </select>
            </td>
            </tr>
            <tr>
                <td> skill programing :  </td>
                <td>
                <?php
                    foreach($ar_skill as $skill => $s){
                ?>
               <input type="checkbox" name="skill[]" value="<?= $s ?>"><?= $skill ?>
                <?php } ?>
            </td>
            </tr>
            <tr>
                <td>
                 <button name="proses">simpan</button>
                </td>
        </from>
        </table>

        </fieldset>

        <?php
        if(isset($_POST['proses'])){
      
        $Nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $Jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
        $total = 0;
        
      
        ?>
        Nama : <?= $nim ?> <br/>
        Nim  : <?= $nama ?> <br/>
        jk : <?= $jk ?> <br/>
     
     <?php    
        function skor_skill($total) {
            if($total >= 100 && $total <=150){
                return "sangat baik";
            } elseif ($total >=60 && $total <=100){
                return "baik";
            } elseif ($total >=40 && $total <=60){
                return "cukup";
            } elseif ($total >= 0 && $total <=40){
                return "kurang";
            }else {
                return "tidak memadai";
            }

        }
        echo 'katagori skill :' .skor_skill($total);
    }
    ?>

</body>

</html>