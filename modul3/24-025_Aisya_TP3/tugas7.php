<?php
// Array awal
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170",
    "David" => "180",
    "Eko" => "172",
    "Fajar" => "168",
    "Gina" => "164",
    "Hana" => "169"
);

// Hapus satu data tertentu (contoh: hapus Barry)
unset($height["Barry"]);

// Ambil semua key yang tersisa
$keys = array_keys($height);

// Ambil key terakhir
$lastKey = end($keys);

// Tampilkan nilai dengan indeks terakhir
echo "Indeks terakhir setelah hapus Barry: " . $lastKey . "<br>";
echo "Nilai indeks terakhir: " . $height[$lastKey];
?>
