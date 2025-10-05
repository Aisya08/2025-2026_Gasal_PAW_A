<?php
// Daftar menu (array)
$menu = [
1 => ["nama" => "Nasi Goreng", "harga" => 20000],
2 => ["nama" => "Mie Ayam", "harga" => 15000], 3
=> ["nama" => "Es Teh", "harga" => 5000],
4 => ["nama" => "Jus Jeruk", "harga" => 10000],
];
$total = 0; // total belanja
$lagi = "y"; // untuk perulangan
// Perulangan kasir
while ($lagi == "y" || $lagi == "Y") {
// Tampilkan menu
echo "=== MENU KASIR ===\n";
foreach ($menu as $key => $item) {
echo $key . ". " . $item["nama"] . " - Rp" .
$item["harga"] . "\n";
}
// Input pilihan
$pilih = (int) readline("Pilih menu (nomor): ");
if (isset($menu[$pilih])) {
$jumlah = (int) readline("Jumlah beli: ");
$subtotal = $menu[$pilih]["harga"] * $jumlah;
$total += $subtotal;
echo "Anda membeli " . $menu[$pilih]["nama"] . " x "

. $jumlah . " = Rp" . $subtotal . "\n";
} else {
echo "Menu tidak tersedia!\n";
}
// Tanya apakah mau beli lagi
$lagi = readline("Apakah mau beli menu lain? (y/n): ");
}
echo "\n=== TOTAL BELANJA ===\n";
echo "Total yang harus dibayar: Rp" . $total .
"\n"; echo "Terima kasih sudah berbelanja!\n";
?>