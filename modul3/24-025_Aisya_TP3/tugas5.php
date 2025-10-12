<?php
// Array vegies berisi 3 data
$vegies = array("Carrot", "Broccoli", "Spinach");

// Hitung panjang array vegies
$vegieslength = count($vegies);

// Tampilkan semua isi array vegies menggunakan perulangan FOR
echo "<h3>Data Array Vegies:</h3>";
for($x = 0; $x < $vegieslength; $x++) {
    echo $vegies[$x];
    echo "<br>";
}
?>
