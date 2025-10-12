<?php
$products = array(
    "Roti" => 5000,
    "Susu" => 10000,
    "Kopi" => 15000,
    "Teh" => 8000
);

// tampilkan daftar produk dan harga
foreach($products as $product => $price){
    echo $product . " : Rp" . $price . "<br>";
}
?>