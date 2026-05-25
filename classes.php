<?php

class Person {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

$person1 = new Person("Alice", 25);
echo $person1->introduce() . "\n";
$person2 = new Person("Bob", 30);
echo $person2->introduce() . "\n";

class Person2{
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

$person3 = new Person2("Charlie", 35);
echo $person3->introduce() . "\n";
$person4 = new Person2("Diana", 28);
echo $person4->introduce() . "\n";