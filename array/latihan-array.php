<?php
$mahasiswa = [["Yossi Nordiansah", "52104110023", "Informatika", "Teknik"], ["Bayu Dwi Handika", "52104110006", "Informatika", "Teknik"], ["Pria Satya Faizal Majid", "52104110029", "Informatika", "Teknik"]]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>Nama: <?= $mhs[0] ?></li>
            <li>NIM: <?= $mhs[1] ?></li>
            <li>Prodi: <?= $mhs[2] ?></li>
            <li>Fakultas: <?= $mhs[3] ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>