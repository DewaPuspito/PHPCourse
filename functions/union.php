<?php
declare(strict_types=1);
function processInput(int|float|string $input) {
    return match (true) {
        is_int($input) => "Input is an integer: " . ($input * 2),
        is_float($input) => "Input is a float: ". round($input, 2),
        is_string($input) => "Input is a string: ". strtoupper($input),
        default => "Unknown type",
    };
}

$inputs = [42, 3.14, "hello", 7, 2.76, "world"];

foreach ($inputs as $input) {
    echo processInput($input) . "\n";
}