<?php
function average_score($scores) {
    if (count($scores) == 0) return 0;
    return array_sum($scores) / count($scores);
}

$survey_responses = [4, 5, 3, 4, 2];
echo "Average score: " . average_score($survey_responses);
?>
