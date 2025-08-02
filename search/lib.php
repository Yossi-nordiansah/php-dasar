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
    $gambar = htmlspecialchars($data["gambar"]);

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
    $gambar = htmlspecialchars($data["gambar"]);
    $id = $data["id"];

    //htmlspecialchars() berfungsi agar jika terdapat elemen html dalam input maka tidak akan dieksekusi oleh server
    $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR email LIKE '%$keyword%'";
    return query($query);
}