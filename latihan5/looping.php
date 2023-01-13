<?php
###
# Pertemuan 5
# Pengulangan
###

// for
// biasanya digunakan utk perulangan
// lalu diisi dengan nilai awal yang biasanya dimulai dari 0
for ($i=0; $i<5; $i++){
    echo "Baris ke-$i<br>";

}

// while
// selama kondisinya bernilai true lakukan apapun yang ada di bracket
// example 1
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

// example 2
$x = 0;
while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}

// do...while
// example 1
// do tuh kyk yaudah jalanin aja, baru periksa kondisi
// klo while itu periksa kondisi dulu baru jalanin
$x = 10; 
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
//tampilan yang akan keluar 

// foreach : buat nampilin data
// example 1
$colors = array ("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value \n";
}
echo "\n";

// example 2
// $age= array(
//     "Peter" => "35",
//     "Ben" => "37",
//     "Joe" => "43",

//     foreach($age as $x => $val) {
//         echo "$x = $val<br>";
//     }
// )
?>