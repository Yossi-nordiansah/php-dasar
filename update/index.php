<?php
require "lib.php";

$mahasiswa = query("SELECT * FROM mahasiswa")

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
    <a href="tambah-mahasiswa.php">Tambah Mahasiswa Baru</a>
    <table border="1" cellpadding=10 cellspacing=0>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                    |
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                </td>
                <td><img src="<?= $row["gambar"]; ?> " alt="foto mahasiswa" style="width: 50px; display: block; margin: auto;"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>