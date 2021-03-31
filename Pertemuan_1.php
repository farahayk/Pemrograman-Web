

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>


<?php
// Array
// PHP ada array asosiatif, kalau di pemrograman lain dianggap objek
// array asosiatif => array yang punya nama

    $mhs = [
        [
        'nama'=>'Farah'
        'nim' => '192410101088'
        'usia' =>'19'
        ],
        [
        'nama'=>'Ayu'
        'nim' => '192410101088'
        'usia' =>'19'
        ]
        ];
        //case menunujukan kondisi tertentu
        //switch dan casae mirip dengan if
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
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td> <?= $arr['nama']?></td>
                    <td> <?= $arr ['nim']?></td>
                    <td> <?= $arr ['mahasiswa']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</body>
</html>

<?php
// default aksi jika case-casenya tidak ketemu

?>