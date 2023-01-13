<?php
// Pertemuan 2 - Latihan PHP
// Operator

// Oprator Aritmatika
// +, -, *, /, %

// $a = 10;
// $b = 20;

// $total = $a % $b;
// echo $total;

//Operator Assigment
// $speed = 83; //operasi aritmatika. gambaran: 83x10
// $speed *= 10; // operasi penugasan  or assigment
// echo $speed;

// Operator Relation
$a = 6;
$b = 2;

// menggunakan operator lebih besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<br>";

// menggunakan operator lebih kecil
$c = $a < $b;
echo "$a < $b : $c";
echo "<br>";

// menggunakan operator relasi sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<br>";

// menggunakan operator relasi sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<br>";

// menggunakan operator lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<br>";

// menggunakan operator lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<br>";

// Operator Logika
//&&, ||, !

$x = 10;
var_dump($x < 20 && $x %2 ==0); //ket: x = 10. Jadi 10 < 20 = benar
var_dump(!$x > 20);  //ket: x = 10. Jadi 10 < 20 = salah

