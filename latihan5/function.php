<?php

// -untuk membuat fungsi bisa gunakan function
// -untuk memasukan datanya bisa gunakan echo
function perkenalan (){
    echo "Asiah 10 Programmer <br>";
    echo "All about me <br>";
    echo "<hr>";
} 

// -untuk memanggil fungsi yang sudah dibuat gunakan nama function yang dibuat
// -untuk memanggil kembali fungsi yang sudah dibuat sama cara manggilnya bisagunakan nama function yang dibuat
perkenalan();

// -untuk memasukan nilai kedalam function gunakan parameter  
function pesan($salam, $name, $from, $family, $hobby, $color)
{
    echo $salam."<br>";
    echo "I am ".$name.". <br>";
    echo "I'm from ".$from.". <br>";
    echo "I have ".$family.". <br>";
    echo "My hobby is ".$hobby.". <br>";
    echo "My favorite color ".$color.". <br>";
} 

$salam = "Hello Everyone...";
$name = "Asiah";
$from = "Jakarta";
$family = "2 Brothers and 3 Sisters";
$hobby = "Watching movies";
$color = "Blue";

// -untuk memanggil parameter bisa panggil funstion dan parameter
pesan($salam, $name, $from, $family, $hobby, $color);
echo "<hr>";

// -untuk mengembalikan nilai bisa gunakan return
function agenow($born_year)
{
    $age = date('Y') - $born_year;
    return $age;

} 

echo "I'm ".agenow(2007)." years old.";
echo "<hr>";

// memanggil function dalam function
function biodata($name, $gender, $age)
{
    echo "Name : ".$name."<br>";
    echo "Gender : ".$gender."<br>";

// memanggil fungsi lain
    echo "Age : ".agenow($age)." years old<br>";
    echo "<hr>";
}

biodata("Asiah", "Female", "2007");
biodata("Rio", "Male", "2004");

// memanggil fungsi yang sama dengan data yang berbeda
biodata("Rio", "Male", "2004");
?>