<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Nota (Master – Detail)</title>
</head>
<body>

<h2>Form Input Nota</h2>

<form action="simpan.php" method="POST">

    <label>Tanggal:</label>
    <input type="date" name="tanggal" required><br><br>

    <label>Customer:</label>
    <input type="text" name="customer" required><br><br>

    <h3>Data Barang</h3>

    <div id="detail">
        <div class="row">
            Nama Barang: <input type="text" name="nama_barang[]">
            Qty: <input type="number" name="qty[]">
            Harga: <input type="number" name="harga[]">
        </div>
    </div>

    <br>
    <button type="button" onclick="tambahRow()">Tambah Barang</button>
    <button type="submit">Simpan</button>

</form>

<script>
function tambahRow() {
    let div = document.createElement("div");
    div.classList.add("row");
    div.innerHTML = `
        Nama Barang: <input type="text" name="nama_barang[]">
        Qty: <input type="number" name="qty[]">
        Harga: <input type="number" name="harga[]">
    `;
    document.getElementById("detail").appendChild(div);
}
</script>

</body>
</html>
