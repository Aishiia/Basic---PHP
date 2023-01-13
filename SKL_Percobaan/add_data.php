<?php 
require 'data.php';

# cek apakah ia terisi atau tidak?
if( isset($_POST["send"])){
    if(add($_POST) > 0){
        echo "<script>
        alert('successfully deleted');
        document.location.href = 'database.php';
        </script>";
    } else{
        echo "<script>
        alert('failed');
        document.location.href = 'database.php';
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
    <title>Shuichin Academy</title>
</head>
<body>
    <h1>Add Student</h1>  
    
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Name : <input type="text" name="Nama" required> 
    <br><br>
    Code Class : <input type="text" name="Kode_Kelas" required> 
    <br><br>
    NIS : <input type="text" name="NIS" required> 
    <br><br>
    Biodata : <input type="text" name="Biodata" required> 
    <br><br>
    Address : <input type="text" name="Alamat" required> 
    <br><br>
    Health records : <input type="text" name="Catatan_Kesehatan" required> 
    <br><br>
    <button type="submit" name="send">Send</button> 
    <br><br>
</body>
</html>