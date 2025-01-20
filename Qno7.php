<?php

// Define the Shape interface
interface Shape {
    public function calculateArea();
}

// Circle class implementing the Shape interface
class Circle implements Shape {
    private $radius;

    // Constructor to set the radius of the circle
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement the calculateArea method for Circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2); 
    }
}

// Square class implementing the Shape interface
class Square implements Shape {
    private $side;

    // Constructor to set the side of the square
    public function __construct($side) {
        $this->side = $side;
    }

    // Implement the calculateArea method for Square
    public function calculateArea() {
        return pow($this->side, 2); 
    }
}

// Create objects of Circle and Square classes
$circle = new Circle(12); 
$square = new Square(40); 

// Calculate and print the areas of Circle and Square
echo "Area of Circle: " . $circle->calculateArea() . "<br/>";
echo "Area of Square: " . $square->calculateArea() ;

?>
