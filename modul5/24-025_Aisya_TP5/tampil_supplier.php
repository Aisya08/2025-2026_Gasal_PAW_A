<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM supplier");
?>
<h2>Data Supplier</h2>
<a href="tambah_supplier.php">Tambah Data</a>
<br><br>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php while($d = mysqli_fetch_array($data)){ ?>
<tr>
    <td><?= $d['id']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['telp']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td>
        <a href="edit_supplier.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus?');">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>