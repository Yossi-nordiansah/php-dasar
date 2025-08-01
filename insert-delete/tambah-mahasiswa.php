<?php
require "lib.php";
if (isset($_POST["submit"])) {

    if (tambahMahasiswa($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan')
            document.location.href = 'index.php'
        </script>
        ";
    } else {
            echo "
        <script>
            alert('data Gagal ditambahkan')
            document.location.href = 'index.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" id="nim" name="nim">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">
                    Submit
                </button>
            </li>
        </ul>
    </form>
</body>

</html>