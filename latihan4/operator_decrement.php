<?php
###
# Pertemuan : 4
# Nama File : operator_decrement.php
####

#Pre-decrement = tambah dulu baru tampil
echo "<h3>Preincrement</h3>";
$a = 0;
$i = 1;
$a = --$i; // i = 1 - i; a = i 
echo "a = " . $a . "<br>";
echo "i = " . $i;

echo "<br>";
#Post-decrement = tampil dulu baru tambah
echo "<h3>Post-increment</h3>";
$a = 0;
$i = 1;
$a = $i--; // a = i; i = i - i;
echo "a = " . $a . "<br>";
echo "i = " . $i;

?>