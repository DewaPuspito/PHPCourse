<?php

$basket = [
    "Apple" => 3,
    "Banana" => 5,
    "Orange" => 2,
    "Grapes" => 4
];

$total = 0;

foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total += $quantity;
}

echo "Total items in the basket: $total\n";