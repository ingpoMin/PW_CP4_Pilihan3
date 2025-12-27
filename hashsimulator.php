<?php

$password_asli = "Admin123";


$hash = password_hash($password_asli, PASSWORD_DEFAULT);

echo "Password Asli: " . $password_asli . "<br>";
echo "Hasil Hash: " . $hash . "<br>";
echo "copy Hasil Hash dan paste ke database password";
?>