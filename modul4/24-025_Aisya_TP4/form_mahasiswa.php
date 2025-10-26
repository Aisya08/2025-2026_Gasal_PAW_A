<?php
$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'validate_mahasiswa.inc.php';

    // Jalankan semua fungsi validasi
    validateNama($errors, $_POST, 'nama');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    validateNIM($errors, $_POST, 'nim');
    validateTanggal($errors, $_POST, 'tanggal');

    // Jika ada error
    if ($errors) {
        echo '<h2>Terjadi Kesalahan. Silakan perbaiki:</h2>';
        echo '<ul>';
        foreach ($errors as $field => $error) {
            echo "<li><strong>$field</strong>: $error</li>";
        }
        echo '</ul>';
        include 'form_mahasiswa.inc.php';
    } else {
        echo '<h2>Form berhasil dikirim tanpa error!</h2>';
        echo '<h3>Data Mahasiswa:</h3>';
        echo 'Nama: ' . htmlspecialchars($_POST['nama']) . '<br>';
        echo 'Email: ' . htmlspecialchars($_POST['email']) . '<br>';
        echo 'NIM: ' . htmlspecialchars($_POST['nim']) . '<br>';
        echo 'Tanggal Lahir: ' . htmlspecialchars($_POST['tanggal']) . '<br>';
    }
} else {
    include 'form_mahasiswa.inc.php';
}
?>
