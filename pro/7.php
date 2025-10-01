<?php
$finalGrade = 0;

function calculateGrade($midterm, $final) {
    global $finalGrade;
    $finalGrade = ($midterm * 0.4) + ($final * 0.6);
    return $finalGrade;
}

echo "Final grade: " . calculateGrade(75, 85);
echo "\nGlobal finalGrade variable: $finalGrade";
?>
