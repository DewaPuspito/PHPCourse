<?php

class Person{
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    public function introduce(): string {
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

$people = [
    new Employee("Eve", 40, "Manager"),
    new Person("Frank", 22)
    ];

function introduce(Person $person) {
    echo $person->introduce() . "\n";
}

foreach ($people as $person) {
    introduce($person);
}