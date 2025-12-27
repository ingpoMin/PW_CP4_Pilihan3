<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Login Admin</h2>
        <?php
        if(isset($_GET["pesan"])){
            if($_GET["pesan"] == "gagal"){
                echo "<div class='error'>Login gagal! Username atau password salah.</div>";
            }else if($_GET["pesan"] ==  "logout"){
                echo "<div class = 'error'>You have successfully logged out</div>";
            }
        }
        ?>

        <form action = "LoginCheck.php" method = "POST">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukan Username" required>
            <label>password</label>
            <input type="password" name="password" placeholder="Masukan password" required>
            <button type = "submit">Masuk</button>
        </form> 
    </div>
</body>
</html>