<?php
###
# Pertemuan : 4
# Nama File : konstanta.php
####

echo "Menghitung Volume Bola \n"; // ket: klo running in browser use <br> not \n
echo "------------------------\n";

// mengggunakan const
const PI = 3.14;
echo "Masukan jari-jari Bola : ";
$r = fgets(STDIN);
$volume = PI * $r * $r * $r;
echo "Rumus Volume Bola Adalah V = 3.14 * r * r * r  \n";
echo "Volume bola adalah" . $volume . "\n";

// Menggunakan Fungsi define
// define and constanta it's same
// parameter 1 menyatakan nama konstanta
// parameter 2 menyatakan nilai konstanta
echo "Menghitung Luas Permukaan Bola \n"; // ket: klo running in browser use <br> not \n
echo "------------------------\n";

define('phi', 3.14);
echo "Masukan jari-jari bola : ";
$r1 = fgets(STDI);
$luas_permukaan_bola
?>