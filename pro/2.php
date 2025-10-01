<?php
function daysUntilEvent($eventDate) {
    $today = new DateTime();
    $event = new DateTime($eventDate);
    $interval = $today->diff($event);
    return $interval->format('%r%a'); 
}

$eventDate = '2025-12-31';
$daysLeft = daysUntilEvent($eventDate);

if ($daysLeft > 0) {
    echo "There are $daysLeft days left until the event.";
} elseif ($daysLeft == 0) {
    echo "The event is today!";
} else {
    echo "The event has already passed.";
}
?>
