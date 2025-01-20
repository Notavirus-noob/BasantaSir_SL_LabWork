<?php
class Product {
    public $description;
    public $quantity;
    public $price;

    // Constructor
    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.\n";
        } else {
            $this->description = $description;
        }

        if (!is_numeric($quantity)) {
            echo "Error: Quantity must be a number.\n";
        } else {
            $this->quantity = $quantity;
        }

        if (!is_numeric($price)) {
            echo "Error: Price must be a number.\n";
        } else {
            $this->price = $price;
        }
    }

    // Getter and Setter for Description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.\n";
        }
    }

    // Getter and Setter for Quantity
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.\n";
        }
    }

    // Getter and Setter for Price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.\n";
        }
    }

    // Method to calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

// Creating an object of Product class
$product = new Product("PC", 3, 200000);

// Printing properties
echo "Description: " . $product->getDescription() . "\n".'<br/>';
echo "Quantity: " . $product->getQuantity() . "\n".'<br/>';
echo "Price: " . $product->getPrice() . "\n".'<br/>';

// Printing calculated price
echo "Total Price: " . $product->calculatePrice() . "\n";
?>
