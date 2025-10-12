<?php
// Deklarasi awal array Lfruits
$Lfruits = array("Avocado", "Blueberry", "Cherry");

// Tambahkan 5 data baru
$Lfruits[] = "Mango";
$Lfruits[] = "Apple";
$Lfruits[] = "Orange";
$Lfruits[] = "Grape";
$Lfruits[] = "Strawberry";

// Tampilkan semua data array
echo "Data array Lfruits: <br>";
foreach ($Lfruits as $index => $value) {
    echo "Index $index : $value <br>";
}

// Menampilkan indeks tertinggi
$indeks_tertinggi = max(array_keys($Lfruits));
echo "<br>Indeks tertinggi dari array Lfruits adalah: $indeks_tertinggi";
?>
