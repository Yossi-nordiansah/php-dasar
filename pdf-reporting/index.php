<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "lib.php";
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        @media print {
            .logout, .tambah, .form-cari {
                display: none;
            }
        }
    </style>
</head>

<body>
    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php">Cetak</a>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah-mahasiswa.php" class="tambah">Tambah Mahasiswa Baru</a>
    <br>
    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" id="keyword" placeholder="masukkan kata kunci.." size="40" autofocus>
        <button type="submit" name="cari" id='search-button'>cari</button>
    </form>
    <br>
    <?php if ($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1; ?>">&laquo</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a style="color: red; font-weight: bold;" href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php else: ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1; ?>">&raquo</a>
    <?php endif; ?>
    <br>
    <div id="container">
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
                    <td><img src="../gambar/<?= $row["gambar"]; ?> " alt="foto mahasiswa" style="width: 50px; display: block; margin: auto;"></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>