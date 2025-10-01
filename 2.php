<?php
function days_until_event($event_date) {
    $today = new DateTime();
    $event = new DateTime($event_date);
    $interval = $today->diff($event);
    return $interval->format('%r%a'); // Number of days, can be negative if past
}

$event_date = '2025-12-31';
echo "Days until event: " . days_until_event($event_date);
?>
