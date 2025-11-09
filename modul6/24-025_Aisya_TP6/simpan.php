<?php
include "koneksi.php";

// 1. Simpan data master
$tanggal  = $_POST['tanggal'];
$customer = $_POST['customer'];

mysqli_query($koneksi, "INSERT INTO nota (tanggal, customer)
                        VALUES ('$tanggal', '$customer')");

// ambil id nota terbaru
$id_nota = mysqli_insert_id($koneksi);

// 2. Simpan data detail
$nama_barang = $_POST['nama_barang'];
$qty         = $_POST['qty'];
$harga       = $_POST['harga'];

for ($i = 0; $i < count($nama_barang); $i++) {

    if ($nama_barang[$i] != "") {
        mysqli_query($koneksi, 
            "INSERT INTO nota_detail (id_nota, nama_barang, qty, harga)
             VALUES ('$id_nota', '{$nama_barang[$i]}', '{$qty[$i]}', '{$harga[$i]}')"
        );
    }
}

echo "Data berhasil disimpan!";
?>
