<?php
$nama = "Aisya";
$nilai = 85;

if ($nilai >= 85) {
$huruf = "A";
} elseif ($nilai >= 70) {
$huruf = "B";
} elseif ($nilai >= 55) {
$huruf = "C";
} elseif ($nilai >= 40) {
$huruf = "D";
} else {
$huruf = "E";
}
echo "Nama Mahasiswa : " . $nama . "<br>";
echo "Nilai : " . $nilai . "<br>";
echo "Huruf : " . $huruf;

?>