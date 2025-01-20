<?php

class Student {
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private and protected properties
    private $tuition;
    protected $indexNumber;

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Getter for surname
    public function getSurname() {
        return $this->surname;
    }

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition() {
        return $this->tuition;
    }
    public function setTuition($tuition) {
        $this->tuition = $tuition;
    }
    public function displayTuition() {
        return $this->getTuition();
    }
}

class PartTimeStudent extends Student {
    // Public method to call protected method from parent
    public function helloParent() {
        return $this->helloFamily();
    }
}

// Create objects
$student = new Student();
$student->name = "Sujin";
$student->surname = "Chaudhary";
$student->country = "Nepal";
$student->setTuition(5000);
$partTimeStudent = new PartTimeStudent();
$partTimeStudent->name = "Sumeramikoto";
$partTimeStudent->surname = "Dhami";
$partTimeStudent->country = "Nepal";

// Call methods for Student class
echo $student->helloWorld() . '<br/>'; 
echo $student->getName() . " " . $student->getSurname() . " from " . $student->country . " tution " .$student->displayTuition().'<br/>'; 

// Call methods for PartTimeStudent class
echo $partTimeStudent->helloWorld() . '<br/>'; 
echo $partTimeStudent->helloParent() . '<br/>'; 
echo $partTimeStudent->getName() . " " . $partTimeStudent->getSurname() . " from " . $partTimeStudent->country . '<br/>'; 

?>
