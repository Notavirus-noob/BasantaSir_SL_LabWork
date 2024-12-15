<?php
function divisibleByFive($number) {
    if ($number % 5 == 0) {
        return true;
    } else {
        return false;
    }
}
echo 'The number 500 is divisible by 5? ';
if(divisibleByFive(500) == '1') {
    echo "true";
} else {
    echo "false";
}