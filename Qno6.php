<?php

// Class User
class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    // Constructor method
    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Method to check if the user is admin
    public function isAdmin() {
        return $this->is_admin;
    }

    // Method to print full name
    public function printFullName() {
        echo $this->name . " " . $this->surname;
        if ($this->is_admin) {
            echo " (admin)";
        }
        echo "\n";
    }
}

// Class Customer extends User
class Customer extends User {
    private $city;
    private $state;
    private $country;

    // Constructor method
    public function __construct($name, $surname, $username, $city, $state, $country) {
        parent::__construct($name, $surname, $username);
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // Setter and Getter methods for location properties
    public function setCity($city) {
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }

    // Method to return location
    public function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }
}

// Class AdminUser extends User
class AdminUser extends User {

    // Constructor method
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// Create objects from each class
$user = new User("Sujin", "Chaudhary", "sumeramikoto");
$adminUser = new AdminUser("Booster", "Yep", "Booster");
$customer = new Customer("Saadhak", "Peak", "louds", "Berlin", "Np", "Nepal");

// Print the full name and is_admin for each object
echo "User: ";
$user->printFullName();
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . "\n".'<br/>';

echo "AdminUser: ";
$adminUser->printFullName();
echo "Is Admin: " . ($adminUser->isAdmin() ? "Yes" : "No") . "\n".'<br/>';

echo "Customer: ";
$customer->printFullName();
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . "\n";
echo "Location: " . $customer->location() . "\n";

?>
