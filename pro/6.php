<?php
function displayCurrentDate() {
    // Format: Monday, 10 September 2025
    return date('l, d F Y');
}

echo "Today is: " . displayCurrentDate();
?>
