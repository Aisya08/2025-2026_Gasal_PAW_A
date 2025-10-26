<?php
$errors = array();

if (isset($_POST['surname'])) {
    // Panggil fungsi validasi
    require 'validate_error.inc.php';
    validateName($errors, $_POST, 'surname');

    // Jika ada error
    if ($errors) {
        echo '<h1>Invalid, correct the following errors:</h1>';
        foreach ($errors as $field => $error) {
            echo "$field $error<br/>";
        }
        // tampilkan kembali form
        include 'form.inc.php';
    } else {
        // Jika tidak ada error
        include 'form.inc.php';
        echo '<p>Form submitted successfully with no errors.</p>';
    }
} else {
    // tampilkan form pertama kali
    include 'form.inc.php';
}
?>
