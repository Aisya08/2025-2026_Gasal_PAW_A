<?php
include "koneksi.php";
$nama   = $_POST['nama'];
$telp   = $_POST['telp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "INSERT INTO supplier(nama,telp,alamat) VALUES('$nama','$telp','$alamat')");
header("location:tampil_supplier.php");
?>