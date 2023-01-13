<?php
//Tipe data

//Tipe data Int, float, boolean, string
$var1 = 5; // Integer
$var2 = 7.5; // Float or Double
$var3 = "We Learn PHP"; // String

var_dump($var1);
var_dump($var3);

//Tipe data Boolean

$benar = true;
if($benar){ // ket: utk kondisi tertentu
    echo "anda benar"; //(for example): ada 2 pilihan daalam suatu aplikasi: ingin tentap diaplikasi atau tidak. JIka iya: maka akan tetap di halaman tersebut, sedangkan tidak: maka bisa langsung keluar dari aplikasi.
}

// Array
$siswa = array("Amel", "Asiah", "Firasya", "Beby", "Nabila");
print_r($siswa);
echo "$siswa[3]"; // ket: utk memanggil siswa tertentu

//short syntax array
$siswa=["Amel", "Asiah", "Firasya", "Beby", "Nabila"];
var_dump($siswa);

// tipe data khusus
$f = NULL; //ket: tdk bisa diisi data. but biasanya digunakan untuk codingan yang complex
// study case: orang yang gak bisa login tidak akan masuk ke menu manapun. that's function from NULL

?>