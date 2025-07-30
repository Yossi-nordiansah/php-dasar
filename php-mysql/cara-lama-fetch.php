<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "belajarphpdasar", 3308);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
var_dump($result);

if(!$result){
    echo mysqli_error($conn);
}

// ada 4 cara untuk fetch data 
// 1. mysqli_fetch_row() yang mengembalikan array numerik 
// $fetchRow = mysqli_fetch_row($result);
// var_dump($fetchRow);

// 2. mysqli_fetch_assoc() yang mengembalikan array associative
// $fetchAssoc = mysqli_fetch_assoc($result);
// var_dump($fetchAssoc);

// 3. mysqli_fetch_array() mengembalikan array numerik dan associative tapi data yang disajikan double
// $fetchArray = mysqli_fetch_array($result);
// var_dump($fetchArray);

// mysqli_fetch_object() (tidak disarankan dipakai)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding=10 cellspacing=0>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Hapus</a>
                |
                <a href="">Ubah</a>
            </td>
            <td><img src="<?= $row["gambar"]; ?> " alt="foto mahasiswa" style="width: 50px; display: block; margin: auto;"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>