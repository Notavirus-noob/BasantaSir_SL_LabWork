<?php
function carsNeeded($people) {
    // Each car can hold 5 people (4 passengers + 1 driver)
    return ceil($people / 5);
}

// Example usage
echo "Cars needed for 13 people: " . carsNeeded(13) . "<br>";
echo "Cars needed for 25 people: " . carsNeeded(25) . "<br>";
echo "Cars needed for 0 people: " . carsNeeded(0) . "<br>";
?>
