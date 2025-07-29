<?php

$x = 10; //merupakan variable biasa

function tampilX()
{
    global $x; //untuk mengambil variabel x di function maka harus ada "global"
    echo $x;
};

tampilX();
echo "<br>";

$mahasiswa = [
    [
        "Nama" => "Yossi Nordiansah",
        "NIM" => "52104110023",
        "Prodi" => "Informatika",
        "Fakultas" => "Teknik"
    ],
    [
        "Nama" => "Bayu Dwi Handika",
        "NIM" => "52104110006",
        "Prodi" => "Informatika",
        "Fakultas" => "Teknik"
    ],
    [
        "Nama" => "Pria Satya Faizal Majid",
        "NIM" => "52104110029",
        "Prodi" => "Informatika",
        "Fakultas" => "Teknik"
    ]
];

//superglobal variabel merupakan variabel global milik php yang dapat diakses diseluruh php yang berbentuk array associative
// $_GET
// $_GET["Nama"] = "Yossi Nordiansah";
// echo $_GET["nama"];
// echo "<br>";
// echo $_GET["nrp"];

// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahsiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><a href="detail-mahasiswa.php?nama=<?= $mhs["Nama"] ?>&nim=<?= $mhs["NIM"] ?>&prodi=<?= $mhs["Prodi"] ?>&fakultas=<?= $mhs["Fakultas"] ?>"><?= $mhs["Nama"] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>