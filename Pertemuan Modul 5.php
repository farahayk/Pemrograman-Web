<?php
    require 'Tabung.php';
//salah satu varibael global GET ()
//   $_GET['nama'] = 'Farah Ayu Khoirunnisa';
// $_GET bisa diisi dengan URL  
//    $_POST['nama'] = 'Farah Ayu Khoirunnisa';
// $_POST bisa diisi dengan form.
//    var_dump($_POST;)
//        if (strlen($_POST['diameter']) > 0) {
//            echo "login !";
//        } else {
//            echo "Isi diameter terlebih dahulu";
//        }
//    }
//isset apa sudah diset, maka lakukan perintah selanjutnya
//    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//    }
//    if (!empty($_POST)) {
//        echo "asdfjkl";
//    }
//   if (isset($_POST['button_submit'])) {
//    $diameter = $_POST['diameter'];
//    echo 'Diameter $diameter <br/>';
//}
//    $luas = 0;
//    $volume = 0;
//    if (isset($_POST['button_submit'])) {
//        $diameter = $_POST['diameter'];
//        $tinggi = $_POST['tinggi'];
//        $r = $diameter / 2;
//
//        $luas = 3.14 * $diameter * $tinggi;
//        $volume = 3.14 * $r * $r;

//        echo "diameternya $diameter <br/>";
//        echo "tinggi $tinggi <br/>";
//    } 

$tabung= new Tabung;
    if (isset($_POST['button_submit'])) {
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungluas();
    }
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter/2;
    //     $luas = 3.14*$diameter*$tinggi;
    //     $volume = 3.14*$r*$r*$tinggi;

    //     echo "Diameter $diameter <br>";
    //     echo "Tinggi $tinggi <br>";
    //}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--    <h1>Nama <?php //echo isset ($_GET['nama']) ? $_GET ['nama'] : 'undefined' ;?></h1>

    <form action="" method='post'>
        <input type="text" name="diameter">
        <button name="sub_button">Submit</button>
    </form>
-->

    <form action="" method="POST">
    <!--action jika tidak diisi akan ke halaman itu sendiri-->
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_submit'>Hitung</button>
    </form>

    <hr>

        <ul>
            <!--<li>Luas Permukaan : <?=$luas;?></li>
            <li>Volume : <?=$volume;?></li>
            <li>Luas selimut : <?= is_null($Tabung) ? 'Tabung Kosong' : $tabung->getLuasSelimut();?> </li>-->
            <li>Luas Sisi : <?=$tabung->getLuasSelimut(); ?></li>
        </ul>
</body>
</html>