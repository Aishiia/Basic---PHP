<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Example 1 -->
<?php
$day = 4;
if ($day == 1){
    echo "Hari ke-1: Hari Ahad";
} elseif ($day == 2) {
    echo "Hari ke-1: Hari Senin";
} elseif ($day == 3) {
    echo "Hari ke-1: Hari Selasa";
} elseif ($day == 4) {
    echo "Hari ke-1: Hari Rabu";
} elseif ($day == 5) {
    echo "Hari ke-1: Hari Kamis";
} elseif ($day == 6) {
    echo "Hari ke-1: Hari Jumat";
} elseif ($day == 7) {
    echo "Hari ke-1: Hari Sabtu";
} else {
    echo "Tidak ada hari yang sesuai";
}
?>

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning";
} elseif ($t < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}
?>
</body>
</html>