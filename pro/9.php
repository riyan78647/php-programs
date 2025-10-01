<?php
function dateDifference($date1, $date2) {
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);
    $diff = $d1->diff($d2);
    return $diff->days;
}

echo "Days between 2025-01-01 and 2025-12-31: " . dateDifference('2025-01-01', '2025-12-31');
?>
