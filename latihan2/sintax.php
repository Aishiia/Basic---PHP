<?php
// Pertemuan 2 - Latihan PHP
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

//echo
//concat
echo "SMK IDN Boarding School <br>";
echo "SMK", "IDN", "Boarding", "School<br>";
echo "SMK" . "IDN" . "Boarding" . "School<br>";

//print
//print "SMK IDN Boarding School"

// print_r
// $nama_siswa = array("Amel", "Asiah", "Firasya", "Beby");
// print_r($nama_siswa);

//var_dump
var_dump("SMK IDN Boarding School");

// Penulisan Sintax PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
<!-- PHP dalam HTML -->
    <h1>Halo, Welcome <?php echo "Asiah"; ?> </h1>
    <p><?php echo "Ini adalah paragraf"; ?> </p>

<!-- HTML dalam PHP -->
<?php
echo "<h1>Welcome Asiah</h1>"
</body>
</html>


