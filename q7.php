<?php
function calculatePower($voltage, $current) {
    return $voltage * $current;
}
echo "\nPower for 220V and 5A: " . calculatePower(220, 5) . "W\n";