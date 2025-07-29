<?php
//Array asociative 
// definisinya sama seperti array numerik akan tetapi terdapat key yang berupa string yang dapat kita isi sendiri 

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

echo $mahasiswa[0]["Nama"];
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
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["Nama"] ?> </li>
            <li>NIM : <?= $mhs["NIM"] ?> </li>
            <li>Prodi : <?= $mhs["Prodi"] ?> </li>
            <li>Fakultas : <?= $mhs["Fakultas"] ?> </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>