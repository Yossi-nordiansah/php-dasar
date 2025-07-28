<?php
//membuat array versi lama
// $hari = array("Senin", "Selasa", "Rabu");

// //membuat array versi baru
// $bulan = ["Januari", "Februari", "Maret"];

//menampilkan array
//var_dump
// var_dump($hari);
// echo "<br>";

// //print_r
// print_r($bulan);
// echo "<br>";

// //menampilkan satu elemen pada array
// echo $bulan[1];

// //menambahkan element baru pada akhir array
// $hari[] = "Kamis";
// echo "<br>";
// print_r($hari);

$angka = [3, 2, 15, 16, 12, 9, 5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            box-sizing: border-box;
            margin: 5px;
            float: left;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php }; ?>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>