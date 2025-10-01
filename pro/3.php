<?php
function averageScore($scores) {
    if (count($scores) === 0) return 0;
    $total = array_sum($scores);
    return $total / count($scores);
}


$responses = [4, 5, 3, 4, 5];
$average = averageScore($responses);

echo "The average survey score is: " . number_format($average, 2);
?>
