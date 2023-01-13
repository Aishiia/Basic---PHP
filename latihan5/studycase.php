<?php


// #Example 1

// function Bill (){
//     echo "Narias Shop <br>";
//     echo "Cosmetic, skincare, bodycare, and other <br>";
//     echo "<hr>";
// } 

// Bill ();

// function hitungHarga ($produk, $harga, $diskon=0){
//     if ($diskon == 0){
//         return $harga;
//     } else {
//         return $harga - ($harga * ($diskon/100));
    
//     }
// }

// echo "Name item<br>";
// echo "--------------------------<br>"; 

// // memanggil fungsi hitung harga menggunakan ()
// $harga1 = hitungHarga("hairmask", 7000, 15); #diskon 15%
// $harga2 = hitungHarga("facialwash", 20000, 25); #diskon 25%
// $harga3 = hitungHarga("suncreen", 18000, 10); #diskon 10%
// $harga4 = hitungHarga("moisturizer", 37000, 15); #diskon 15%
// $harga5 = hitungHarga("bodylotion", 20000, 5); #diskon 5%
// $harga6 = hitungHarga("bodyscrub", 33000, 10);  #diskon 10%


// // menampilkan hasil perkalian
// echo "harga hairmask: Rp." . $harga1 . ",-<br>";
// echo "harga facialwash: Rp." . $harga2 . ",-<br>";
// echo "harga suncreen: Rp." . $harga3 . ",-<br>";
// echo "harga moisturizer: Rp." . $harga4 . ",-<br>";
// echo "harga bodylotion: Rp." . $harga5 . ",-<br>";
// echo "harga bodysrub: Rp." . $harga6 . ",-<br>";
// echo "<br>";

#Example 2
function question (){
    echo "Pertanyaan: Pak Joko mempunyai Mobil seharga Rp. 120.700.000,-. Tahun ini Pak joko akan membayar pajak senilai 2.5% dari harga mobil setiap tahunnya. Berapa pajak yang dibayar oleh Pak Joko, jika pak joko tidak membayar pajak selama 3 tahun? <br>";
    echo "<br>";
} 

question ();

function hitungpajak ($harga, $diskon){
    if ($diskon){
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    
    }
}

$harga = hitungpajak("pajak", 120700000, 2.5/100);

function answer (){
    echo "harga pajak selama 1 tahun Rp." .$harga. ",-<br>";
    echo "harga barang Rp.120.700.000,-<br>";
}

answer ();

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
