<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Tambahkan 5 data baru
array_push($fruits, "Apple", "Banana", "Mango", "Orange", "Grapes");

// Hitung panjang array
$arrlength = count($fruits);

// Tampilkan isi array dengan FOR
for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>