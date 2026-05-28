<?php

class MathUtils {
    public static float $pi = 3.14159;
    public static function square(float $number): float {
        return $number * $number;
    }
}

// Expensive resources
class Connection{
    private static $instance = null;
    private function __construct() {}
    public static function singleton() {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();

// var_dump(mathUtils::$pi, mathUtils::square(5));