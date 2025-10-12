<?php
// Inisialisasi array fruits
$fruits = array("Avocado", "Blueberry", "Cherry", "Mango", "Apple", "Orange", "Grape", "Strawberry");

// Hapus data pada indeks 2 (Cherry)
unset($fruits[2]);

// Tampilkan semua data setelah penghapusan
echo "Data array fruits setelah penghapusan:<br>";
foreach ($fruits as $index => $value) {
    echo "Index $index : $value <br>";
}

// Cari indeks tertinggi
$indeks_tertinggi = max(array_keys($fruits));
echo "<br>Indeks tertinggi dari array fruits sekarang adalah: $indeks_tertinggi";
?>
