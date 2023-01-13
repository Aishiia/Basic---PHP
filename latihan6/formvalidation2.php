<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
    
<?php
$name_pesan = $email_pesan = $password_pesan = "";
$name = $email = $password = "";

# cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # cek apakah field name kosong?
    if (empty($_POST["name"])) {
        $name_pesan = "Nama yang harus diisi";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $email_pesan = "Email yang harus diisi";
    } else {
        # cek apakah email yang dibuat sesuai atau tidak?
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email_pesan = "Email yang dimasukan tidak valid";
        } else {
        $email = htmlspecialchars($_POST["email"]);
    } 
   }
   if(empty($_POST["password"])){
      $password_pesan = "Password harus diisi";
   } else {
    # cek apakah password kurang dari 5 karakter?
    if(strlen($password)>5){
        $password_pesan = "Password terlalu pendek";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }
   }
}


?>

<h2>Contoh Form Validation Dengan PHP</h2>

<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type = "text" name = "name">
<span class = "error">* <?php echo $name_pesan;?></span>
<br><br>
Email: <input type = "text" name = "email">
<span class ="error">* <?php echo $email_pesan;?></span>
<br><br>

Password: <input type = "password" name = "password">
<span class = "error">* <?php echo $password_pesan;?></span>
<br><br>
<input type = "submit" name = "submit" value = "Submit">
</form>

<?php
echo "<h2>Yang kamu inputkan: </h2>";
echo "<br>";
echo "Nama : ".$name;
echo "<br>";
echo "E-mail : ".$email;
echo "<br>";
echo "Password : ".$password;
?>

</body>
</html>