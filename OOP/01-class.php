<?php 

    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce() {
            return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
        }
    }


    $persona = new Person("Alice", 30);
    print_r($persona->introduce());