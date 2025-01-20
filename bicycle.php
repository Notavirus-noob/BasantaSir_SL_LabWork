<?php

class Bicycle {
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight; // Weight stored in grams

    // Constructor to initialize properties
    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight; // Weight in grams
        $this->description = $description;
    }

    // Getter for bike information
    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    // Getter for weight with configurable unit
    public function getWeight($inKilograms = false) {
        if ($inKilograms) {
            return $this->weight / 1000; // Convert grams to kilograms
        }
        return $this->weight; // Return weight in grams
    }

    // Setter for weight
    public function setWeight($weight) {
        $this->weight = $weight; // Set weight in grams
    }
}

// Create two Bicycle objects
$bike1 = new Bicycle("Trent", "TR", 2021, 12000);

// Print each bike's information
echo $bike1->getInfo() . '<br/>'; 

echo "Weight in kg: " . $bike1->getWeight(true) . " kg" . '<br/>';
echo "Weight in g: " . $bike1->getWeight() . " g" . '<br/>';

$bike2 = new Bicycle("Prada", "F1", 2020, 13500);

echo $bike2->getInfo() . '<br/>'; 



echo "Weight in kg: " . $bike2->getWeight(true) . " kg" . '<br/>';



echo "Weight in g: " . $bike2->getWeight() . " g" . '<br/>';

?>
