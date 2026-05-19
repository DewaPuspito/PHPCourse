<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int, $float, $stringToInt, $floatToInt);

var_dump(
    round(3.7),
    round(3.2),
    floor(3.8),
    ceil(3.2),
    min(5, 10, 3, 8),
    max(5, 10, 3, 8),
    rand(1,100),
    abs(-5)
);


$number = 12345.6789;

echo "Formatted number: " . number_format($number, 2, '.', ',') . "\n";