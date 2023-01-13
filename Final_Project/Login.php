<?php
require 'Function.php';

if( isset($_POST["submit"])){
    if(data_lama($_POST) > 0){
        echo "<script>
        alert('Selamat kamu berhasil masuk🥳🥳✨');
        document.location.href = 'Index.php';
        </script>";
    } else{
        echo "<script>
        alert('Mungkin, kamu harus coba lagi');
        document.location.href = 'Index.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body>
<div class="container">
<p id="login">Login</p>
<form action="<?php $_SERVER["PHP_SELF"]?>" method ="post">
    Nama : <input type="text" name="Nama" required>
    <br><br>
    Email : <input type="text" name="Email" required>
    <br><br>
    Password : <input type="password" name="Password" required placeholder="* terdiri dari karakter dan angka">
    <br><br>
    
</form>
    <div class="input-group"><button name="submit" class="btn"></button></div>
    <p id="login-register-text1">Don't have an account?
    <strong><a href="Tambah_Data.php" class="registrasi" font-weight="bolder">Registrasi</a></p></strong>
    <input class="submit" type="submit" name="submit" value="Kirim"> 
 </div>
</body>
</html>