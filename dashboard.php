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
        <h1>Selamat Datang</h1>

        <img src="https://i.pinimg.com/1200x/64/48/79/644879bdaa25b030538852706fde40a7.jpg" class="img-mobil" alt="Porsche 911 RSR">

        <div class="deskripsi-mobil">
            <h3>Porsche 911 RSR GTE</h3>
            <ul>
                <li><strong>Mesin:</strong> Boxer 6 silinder 4194cc tanpa turbo</li>
                <li><strong>Transmisi:</strong> 6 percepatan squential dengan paddle shifter</li>
                <li><strong>Posisi mesin:</strong> Mid-engine</li>
                <li><strong>Penggerak:</strong> Roda belakang</li>
            </ul>
        </div>

        <p>Halo <strong><?php echo $_SESSION['username']; ?></strong>, Anda berhasil login.</p>
        
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

</body>
</html>