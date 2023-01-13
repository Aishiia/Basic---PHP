<?php
# array | (CREATE)
$day = ["Monday", "Tuesday", "Wednesday", "Thursday"];

# show array | (READ)
// use: var_dump, print_r
// ket: hanya digunakan developer ketika bugging
// biasanya use foreach
var_dump($day); # nampilin semuanya
echo "<br>";
print_r($day); # gak nampilin semuanya
echo "<br>";

# show 1 element in array
echo $day[2];

# add elemen in to array | (UPDATE)
echo "Sebelum ditambah <br>";
var_dump($day);

echo "<br>";

echo "Setelah ditambah <br>";
$day[] = "Friday";
var_dump($day);

echo "<br>";

# delete elemen array
unset($day[0]);
var_dump($day);

?>