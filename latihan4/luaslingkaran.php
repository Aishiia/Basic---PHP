<?php
echo "---Menghitung luas lingkaran---\n\n"; //ket [\n] berfungsi untuk pengganti <br>.
echo "masukan jari-jari:";
$jari = fgets(STDIN);
$luas = 3.14 * $jari * $jari;

echo "Luas lingkaran adalah :" .$luas;

$phi=3.14;

function luas ($phi,$jari) {
    return $phi*$jari*$jari;
}
echo "---Menghitung luas lingkaran---\n";
echo "masukan jari-jari: \n";
$jari = fgets(STDIN);
echo  "luas lingkaran adalah ";
echo luas ($phi,$jari)

?>