<?php
require "lib.php";

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah')
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data Gagal diubah')
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
    <title>Ubah mahasiswa</title>
</head>
<h1>Ubah Mahasiswa</h1>
<body>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <li>
                <label for="nim">NIM :</label>
                <input type="text" id="nim" name="nim" value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="email" name="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar" value="<?= $mhs["gambar"]; ?>">
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