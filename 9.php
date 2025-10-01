<?php
function date_diff_days($date1, $date2) {
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);
    $diff = $d1->diff($d2);
    return $diff->days;
}

echo "Days difference: " . date_diff_days('2025-01-01', '2025-12-31');
?>
