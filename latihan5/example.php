<!-- Salinan coding studycase.php -->

<?php

function Bill (){
    echo "Narias Shop <br>";
    echo "-------------------------------- <br>";
    // echo "<hr>";
} 

Bill ();

function hitungHarga ($produk, $harga, $diskon=0){
    if ($diskon == 0){
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    
    }
}

// memanggil fungsi hitung harga menggunakan ()
$harga1 = hitungHarga("hairmask", 7000, 15); #diskon 15%
$harga2 = hitungHarga("facialwash", 20000, 25); #diskon 25%
$harga3 = hitungHarga("suncreen", 18000, 10); #diskon 10%
$harga4 = hitungHarga("moisturizer", 37000, 15); #diskon 15%
$harga5 = hitungHarga("bodylotion", 20000, 5); #diskon 5%
$harga6 = hitungHarga("bodyscrub", 33000, 10);  #diskon 10%


// menampilkan hasil perkalian
echo "Harga hairmask: " . $harga1 . "<br>";
echo "Harga facialwash: " . $harga2 . "<br>";
echo "Harga suncreen: " . $harga3 . " <br>";
echo "Harga moisturizer: " . $harga2 . "<br>";
echo "Harga bodylotion: " . $harga3 . " <br>";
echo "Harga bodyssrub: " . $harga3 . " <br>";

?>

<!-- Salinan coding function.php --><?php

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

pesan($salam, $name, $from, $family, $hobby, $color);

// -untuk mengembalikan nilai bisa gunakan return
function agenow($born_year)
{
    $age = date('Y') - $born_year;
    return $age;

} 

echo "I'm ".agenow(2007)." years old.";
echo "<hr>";
?>

