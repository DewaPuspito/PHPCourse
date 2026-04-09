<?php

$x = 10;

if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 50;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} elseif ($score >= 50) {
    echo "Grade: E\n";
} else {
    echo "Grade: F\n";
}

$num = -1;

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "$num is a positive even number\n";
    } else {
        echo "$num is a positive odd number\n";
    }
} else {
    echo "$num is not a positive number\n";
}

$username = "admin";
$password = "password12";

if ($username == "admin" && $password == "password123") {
    echo "Access granted\n";
} else {
    echo "Access denied\n";
}