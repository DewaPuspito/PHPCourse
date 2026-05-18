<?php

$name = "Alice";
$age = 30;

printf("My name is %s and I am %d years old.", $name, $age);

$csv = "apple,banana,cherry";
$fruits = explode(",", $csv);
var_dump($fruits, implode(", ", $fruits));

$padded = str_pad("Hello", 11, "-", STR_PAD_BOTH);
echo $padded; 

var_dump(trim("   Hello World!   "));