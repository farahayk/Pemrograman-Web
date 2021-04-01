<?php
    require "Balok.php";
    $balok = new Balok;
    $balok->panjang = 23;
    $balok->lebar = 15;
    $balok->tinggi = 7;


    // private (buat catatan)
    // $balok->setPanjang(13);
    // $balok->setTinggi(5);
    // $balok->setLebar(7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101088</title>
</head>
<body>
    <h3>Farah Ayu Khoirunnisa'</h3>
    <h1>Bangun Ruang : Balok</h1>
    <?php
    $luas_balok  = $balok->getLuas();
    echo "Luas permukaan balok adalah <br/>";
    echo "Panjang = $balok->panjang <br/>";
    echo "Lebar = $balok->lebar <br/>";
    echo "Tinggi = $balok->tinggi <br/>";
    echo "Luas balok = $luas_balok <br/>";
    
    $volume_balok  = $balok->getVolume();
    echo "----------------------<br/>";
    echo "Volume balok adalah <br/>";
    echo "Panjang = $balok->panjang <br/>";
    echo "Lebar = $balok->lebar <br/>";
    echo "Tinggi = $balok->tinggi <br/>";
    echo "Volume balok = $volume_balok";
    ?>
</body>
</html>