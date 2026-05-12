<?php

$greet = function ($name) {
    return "Hello, $name\n";
};

echo $greet("World");

$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Hi";
$greet2 = function ($name) use (&$message) {
    $message = $message . " there";
    return "$message, $name\n";
};

echo $greet2("World"); 
echo $message . "\n";