<?php
require 'validate.inc.php';

if (validateName($_POST, 'surname'))
    echo 'Data OK!';
else
    echo 'Data invalid!';
?>
