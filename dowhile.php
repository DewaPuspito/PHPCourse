<?php

do {
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";
    if (6 == $diceRoll) {
        echo "Congratulations! You hit a jackpot!\n";
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
} while ('y' == $rollAgain); 