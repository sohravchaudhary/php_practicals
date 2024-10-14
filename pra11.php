<?php


class Car {
    // Properties
    public $color;
    public $model;

    // Constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    // Method
    public function displayInfo() {
        return "Car Model: $this->model, Color: $this->color";
    }
}

// Creating an object
$myCar = new Car("Red", "Toyota");
echo $myCar->displayInfo(); // Output: Car Model: Toyota, Color: Red

?>