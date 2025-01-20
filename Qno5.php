<?php
// Interface HasInfo
interface HasInfo {
    public function getInfo();
}

// Address class implementing HasInfo interface
class Address implements HasInfo {
    public $street;
    public $number;
    public $city;

    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    public function getInfo() {
        return "Address: street $this->street, number $this->number, city $this->city";
    }
}

// Phone class implementing HasInfo interface
class Phone implements HasInfo {
    public $prefix;
    public $number;

    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    public function getInfo() {
        return "Number: $this->prefix / $this->number";
    }
}

// User class implementing HasInfo interface
class User implements HasInfo {
    public $name;
    public $surname;
    private $address;
    private $phone;

    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getInfo() {
        return "User: $this->name  $this->surname " ."</br>". $this->address->getInfo() ."</br>" . $this->phone->getInfo();
    }
}

// Creating objects from the Address and Phone classes
$address = new Address("Ktm", 123, "Nepal");
$phone = new Phone("+977", "9811111111");

// Creating a User object and calling the getInfo method
$user = new User("Sujin", "Chaudhary ", $address, $phone);
echo $user->getInfo();
?>
