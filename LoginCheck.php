<?php
session_start();

include "connection.php";


$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($koneksi, $username);

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $row = mysqli_fetch_assoc($data);

    if(password_verify($password, $row["password"])){

        $_SESSION["username"] = $username;
        $_SESSION["status"] = "login";
        header("location:dashboard.php");
    } else {
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}

?>