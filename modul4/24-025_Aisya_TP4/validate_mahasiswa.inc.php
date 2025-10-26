<?php
// Validasi nama (hanya huruf dan spasi)
function validateNama(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z\s'-]+$/";
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!preg_match($pattern, $field_list[$field_name]))
        $errors[$field_name] = 'invalid format';
}

// Validasi email (menggunakan filter bawaan PHP)
function validateEmail(&$errors, $field_list, $field_name) {
    if (empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL))
        $errors[$field_name] = 'invalid email format';
}

// Validasi password (minimal 8 karakter)
function validatePassword(&$errors, $field_list, $field_name) {
    if (empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (strlen($field_list[$field_name]) < 8)
        $errors[$field_name] = 'too short (min 8 characters)';
}

// Validasi NIM (hanya angka)
function validateNIM(&$errors, $field_list, $field_name) {
    if (empty($field_list[$field_name]))
        $errors[$field_name] = 'required';
    else if (!ctype_digit($field_list[$field_name]))
        $errors[$field_name] = 'must be numeric';
}

// Validasi tanggal lahir (format YYYY-MM-DD)
function validateTanggal(&$errors, $field_list, $field_name) {
    if (empty($field_list[$field_name])) {
        $errors[$field_name] = 'required';
    } else {
        $tgl = explode('-', $field_list[$field_name]);
        if (count($tgl) == 3) {
            if (!checkdate($tgl[1], $tgl[2], $tgl[0])) {
                $errors[$field_name] = 'invalid date';
            }
        } else {
            $errors[$field_name] = 'invalid format (use YYYY-MM-DD)';
        }
    }
}
?>
