<?php
function findStringIndex($array, $string) {
    // Check if the string exists in the array
    $index = array_search($string, $array);

    // Return the index if found, otherwise indicate not found
    return ($index !== false) ? $index : "String not found in array.";
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$string = "cherry";
echo "Index of '$string': " . findStringIndex($array, $string) . "<br>";

$string = "mango";
echo "Index of '$string': " . findStringIndex($array, $string) . "<br>";
?>
