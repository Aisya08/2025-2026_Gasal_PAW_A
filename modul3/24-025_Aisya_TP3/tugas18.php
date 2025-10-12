<?php
$names = array("Dina", "Budi", "Ali", "Citra");

// sort ascending
sort($names);
print_r($names);

// sort descending
rsort($names);
print_r($names);

// sort associative ascending
$age = array("Dina"=>20, "Budi"=>22, "Ali"=>19);
asort($age);
print_r($age);

// sort associative descending
arsort($age);
print_r($age);
?>
