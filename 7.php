<?php
$final_grade = 0;  # global

function calculate_grade($test_score, $assignment_score){
    global $final_grade;
    $final_grade = ($test_score * 0.7) + ($assignment_score * 0.3);
    return $final_grade;
}
print("Grade:".calculate_grade(85, 90));
print("Final grade variable: $final_grade");
?>