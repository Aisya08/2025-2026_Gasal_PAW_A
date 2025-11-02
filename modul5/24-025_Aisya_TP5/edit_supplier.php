<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<form method="post" action="edit_aksi.php">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    Nama : <input type="text" name="nama" value="<?= $d['nama']; ?>"><br>
    Telp : <input type="text" name="telp" value="<?= $d['telp']; ?>"><br>
    Alamat : <input type="text" name="alamat" value="<?= $d['alamat']; ?>"><br>
    <input type="submit" value="Simpan">
</form>