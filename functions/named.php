<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n"; // Hello, Alice!
echo greet("Bob", "Hi") . "\n"; // Hi, Bob!
echo greet("Charlie", "Welcome", true) . "\n"; // WELCOME, CHARLIE!

echo greet("Dave", shout: false) . "\n"; 