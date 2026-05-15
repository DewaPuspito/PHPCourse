<?php

function add(int $a, int $b): int {
    return $a + $b;
}

var_dump(add(2, 3), add(2,3)); // int(5)


$total = 0;

function addToTotal($value) {
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(5), addToTotal(5)); // int(5), int(15)