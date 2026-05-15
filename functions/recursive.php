<?php

function factorial($n): int {   
    echo "Calculating factorial of $n\n";
    if ($n === 0 || $n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

var_dump(factorial(5));