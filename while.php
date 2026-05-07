<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Congratulations! You've unlocked the treasure.\n";
    } elseif ($attempts == $maxAttempts) {
        echo "Sorry, you've used all your attempts. The treasure remains locked\n";
    } else {
        echo "Incorrect. Try again. Attempts left: " . ($maxAttempts - $attempts) . "\n";
    }
}