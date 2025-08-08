<?php
require "lib.php";

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan')
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
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
    <h1>halaman registrasi</h1>
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
                <label for="password2">Confirm Password :</label>
                <input type="password" id="password2" name="password2">
            </li>
            <li>
                <button type="submit" name="submit">
                    Register
                </button>
            </li>
        </ul>
    </form>

</body>

</html>