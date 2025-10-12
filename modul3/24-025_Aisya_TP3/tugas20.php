<?php
$students = array(
    array("Aisyah", 80, 90, 85),
    array("Budi", 70, 75, 80),
    array("Citra", 90, 88, 92)
);

foreach($students as $student){
    $name = $student[0];
    $scores = array_slice($student, 1);
    $avg = array_sum($scores) / count($scores);
    echo "Rata-rata nilai $name adalah: $avg <br>";
}
?>