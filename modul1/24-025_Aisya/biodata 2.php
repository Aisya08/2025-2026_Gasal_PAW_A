<?php
// Ambil nilai dari query string (URL), jika tidak ada beri nilai default
$nama    = isset($_GET['nama']) ? $_GET['nama'] : "Tidak diketahui";
$nim     = isset($_GET['nim']) ? $_GET['nim'] : "Tidak diketahui";
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : "Tidak diketahui";

echo "<h2>Biodata Mahasiswa</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><td>Nama</td><td>" . $nama . "</td></tr>";
echo "<tr><td>NIM</td><td>" . $nim . "</td></tr>";
echo "<tr><td>Jurusan</td><td>" . $jurusan . "</td></tr>";
echo "</table>";
?>