<?php 
require 'Function.php';

if( isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
        alert('Selamat kamu berhasil mendaftarkan diri🥳🥳✨');
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
    <link rel="stylesheet" href="Tambah_Data.css">
    <title>Registrasi</title>
</head>
<body>
    <h1 class="registrasi">Registrasi</h1>  
    
    <form class="tambah_data" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Nama : <input type="text" name="Nama" required>
    <br><br> 
    NIS : <input type="text" name="NIS" required> 
    <br><br>
    Jenis Kelamin : <input type='text'  name="Jenis_Kelamin" required> 
    <br><br>
    Lahir : <input type="text" name="Lahir" required> 
    <br><br>
    Kelas : <input type="text" name="Kelas" required> 
    <br><br>
    Nomor Telepon : <input type="text" name="Nomor_Telepon" required> 
    <br><br>
    Email : <input type="text" name="Email" required placeholder="example@gmail.com"> 
    <br><br>
    Password : <input type="password" name="Password" required placeholder="password harus terdiri dari karakter dan huruf"> 
    <br>
    <input class="submit" type="submit" name="submit" value="Kirim"> 
    <br><br>
</body>
</html>