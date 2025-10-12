<?php
// Array awal
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Tambah 5 data baru
$height["David"] = "180";
$height["Eko"] = "172";
$height["Fajar"] = "168";
$height["Gina"] = "164";
$height["Hana"] = "169";

// Ambil semua key
$keys = array_keys($height);

// Ambil key terakhir
$lastKey = end($keys);

// Tampilkan nilai dengan indeks terakhir
echo "Indeks terakhir: " . $lastKey . "<br>";
echo "Nilai indeks terakhir: " . $height[$lastKey];
?>
