<?php 
session_start();


if($_SESSION['status'] != "login"){
    header("location:login.php?pesan=belum_login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body>

    <div class="welcome">
        <h1>Selamat Datang, Admin!</h1>
        <div class="carousel-item active">
        <img src="https://i.pinimg.com/1200x/64/48/79/644879bdaa25b030538852706fde40a7.jpg" class="d-block w-100" alt="...">
        </div>
        <p>Halo <strong><?php echo $_SESSION['username']; ?></strong>, Anda berhasil login ke dalam sistem.</p>
        <p>Ini adalah halaman dashboard. Hanya user yang sudah login yang bisa melihat halaman ini.</p>

        <a href="logout.php" class="logout">Logout</a>
    </div>

</body>
</html>