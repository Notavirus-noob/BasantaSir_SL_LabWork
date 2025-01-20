<?php
// Interface for Vehicle
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// Car class implementing Vehicle interface
class Car implements Vehicle {
    // Private properties for encapsulation
    private $make;
    private $model;
    private $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and setter for $make
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    // Getter and setter for $model
    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    // Getter and setter for $year
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Method to start the car
    public function start() {
        echo "Car started." .'<br/>';
    }

    // Method to display car information
    public function displayInfo() {
        echo "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year .'<br/>';
    }

    // Implementing startEngine from Vehicle interface
    public function startEngine() {
        echo "Engine started." .'<br/>';
    }

    // Implementing stopEngine from Vehicle interface
    public function stopEngine() {
        echo "Engine stopped." .'<br/>';
    }

    // Method to get a description of the car
    public function getDescription() {
        return "Parent::This is a car: " . $this->make . " " . $this->model . " made in " . $this->year . "".'<br/>';
    }
}

// ElectricCar class extending Car
class ElectricCar extends Car {
    // Additional property for electric cars
    private $batteryCapacity;

    // Constructor to initialize properties, including battery capacity
    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Getter and setter for $batteryCapacity
    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }

    public function setBatteryCapacity($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    // Method to charge the electric car
    public function charge() {
        echo "The electric car is charging." .'<br/>';
    }

    // Overriding getDescription method
    public function getDescription() {
        return "Child::This is an electric car: " . $this->getMake() . " " . $this->getModel() . " made in " . $this->getYear() . "with a battery capacity of " . $this->batteryCapacity . " kWh.".'<br/>';
    }
}

// Example usage
$car = new Car("GTR", "Supra", 2025);
$car->start();
$car->startEngine();
$car->displayInfo();
echo $car->getDescription();
$car->stopEngine();
$electricCar = new ElectricCar("Asphak", "Owl", 2018, 69);
$electricCar->start();
$electricCar->startEngine();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription();
$electricCar->stopEngine();
?>
