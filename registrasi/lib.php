<?php 

    $conn = mysqli_connect("localhost", "root", "", "belajarphpdasar", 3308);

    function registrasi($data){

        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        $userOld = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if( mysqli_fetch_assoc($userOld) ){
            echo "<script>
                alert('username sudah ada')
            </script>";
            return false;
        }

        if( $password !== $password2 ){
            echo "<script>alert('password dan confirm password tidak sama')</script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

        return mysqli_affected_rows($conn);
    }

?>