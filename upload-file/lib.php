<?php
$conn = mysqli_connect("localhost", "root", "", "belajarphpdasar", 3308);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahMahasiswa($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    //htmlspecialchars() berfungsi agar jika terdapat elemen html dalam input maka tidak akan dieksekusi oleh server
    $query = "INSERT INTO mahasiswa (nim, nama, email, jurusan, gambar) VALUES ('$nim', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $id = $data["id"];

    $gambarLama = $_POST["gambarLama"];
    if ( $_FILES["gambar"]["error"] === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    //htmlspecialchars() berfungsi agar jika terdapat elemen html dalam input maka tidak akan dieksekusi oleh server
    $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%'";
    return query($query);
}

function upload()
{

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    if ($error === 4) {
        echo "
        <script>
            alert('Unggah Gambar')
        </script>
        ";
        return false;
    }

    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    $namaFileArray = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($namaFileArray));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert('format yang anda upload salah')
        </script>
        ";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('ukuran gambar terlalu besar')
        </script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, '../gambar/' . $namaFileBaru);
    return $namaFileBaru;
}
