<?php

function greet($name) {
    return "Hello, $name!";
}

echo greet("Alice") . "\n";

function greetWithTime($name, $time = "day") {
   return "Good $time, $name!";
}

echo greetWithTime("Bob") . "\n";
echo greetWithTime("Charlie", "evening") . "\n";