<?php
session_start();
require "lib.php";

if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ){

    global $conn;
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {

    global $conn;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"] = true;

            if( isset($_POST["remember"])){

                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>halaman Login</h1>
    <?php if(isset($error)) :?>
        <p style="color: red; font-style: italic;">Username atau Password Salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="remember" style="display: inline;">Remember me</label>
                <input type="checkbox" id="remember" name="remember">
            </li>
            <li>
                <button type="submit" name="submit">
                    Login
                </button>
            </li>
        </ul>
    </form>

</body>
</html>