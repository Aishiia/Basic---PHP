<?php

function hitungHarga ($produk, $harga, $diskon=0){
    if ($diskon == 0){ #gak bisa langsung dipanggil harus buat variabel dulu
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    
    }
}

// memanggil fungsi hitung harga menggunakan ()
$harga1 = hitungHarga("hairmask", 7000, 15); #diskon 15%
$harga2 = hitungHarga("facialwash", 20000, 25); #diskon 25%
$harga3 = hitungHarga("suncreen", 18000, 10); #diskon 10%
 
// menampilkan hasil perkalian
echo "Harga hairmask: " . $harga1 . "<br>";
echo "Harga facialwash: " . $harga2 . "<br>";
echo "Harga suncreen: " . $harga3 . " <br>";

?>