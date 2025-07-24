<?php
//ini adalah komentar
/*ini semua adalah 
komentar*/

//  echo "Yossi Nordiansah \n";
//  print_r("Yossi Nordiansah");

// variabel
$nama = "Yossi Nordiansah";
echo "Hallo nama saya $nama <br>";

// operator
// + - * / %
$x = 10;
$y = 7;
echo $x*$y . "<br>";

// operator concat .
$nama_depan = "Yossi";
$nama_belakang = "Nordiansah";
echo $nama_depan . " " . $nama_belakang . "<br>";

//operator Assigment
// =, +=, -=, *=, /=, %=, .=
$x += 5;
echo $x . "<br>";

$nama_depan .=" ";
$nama_depan .="Nordiansah";
echo $nama_depan . "<br>";

//operator perbandingan
// <, >, <=, >=, ==, ===, !=, !==

var_dump(5 > 1);
var_dump(1 === "1");

//operator logika
// &&, ||, !

var_dump($x < 20 || $x % 2 == 0)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo selamat datang <?php echo "Yossi Nordiansah"; ?></h1>
    <h1>Hallo selamat datang <?php echo $nama; ?></h1>
    <?php
    echo "<h2>Hello Yossi Nordiansah</h2>";
    ?>
</body>
</html>