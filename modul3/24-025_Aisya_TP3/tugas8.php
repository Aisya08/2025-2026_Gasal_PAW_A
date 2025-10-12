<?php
// Buat array baru weight dengan 3 data
$weight = array(
    "Andy" => 60,
    "Barry" => 58,
    "Charlie" => 65
);

// Ambil semua key (indeks asosiatif)
$keys = array_keys($weight);

// Ambil key urutan kedua (index 1)
$secondKey = $keys[1];

// Tampilkan data kedua
echo "Indeks kedua: " . $secondKey . "<br>";
echo "Nilai indeks kedua: " . $weight[$secondKey];
?>
