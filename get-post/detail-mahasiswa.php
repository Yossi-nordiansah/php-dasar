<?php 

    if( !isset($_GET["nama"]) ){ //jika $_GET["nama"] belum dideklarasikan / kosong maka redirect
        header("Location: variable-scope.php"); //redirect ke variable-scope.php
        exit; // agar script dibawahnya tidak di eksekusi
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>ini adalah detail mahasiswa</h4>
    <p>Nama: <?= $_GET["nama"] ?></p>
    <p>NIM: <?= $_GET["nim"] ?></p>
    <p>Prodi: <?= $_GET["prodi"] ?></p>
    <p>Fakultas: <?= $_GET["fakultas"] ?></p>
</body>
</html>