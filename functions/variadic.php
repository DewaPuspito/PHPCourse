<?php

declare(strict_types=1);

function sum(int ...$numbers): int {
    $total = 0;
    var_dump($numbers);
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

var_dump(sum());
var_dump(sum(5));
var_dump(sum(5, 10, 15, 20, 25));

$numbers = [1, 2, 3, 4, 5];

var_dump(sum(...$numbers));

function introduceTeam(string $teamName, string ...$members): void {
    echo "Team: $teamName\n";
    var_dump($members);
    echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("Y Team", "Upin", "Ipin");

$members = ["Jarjit", "Ehsan", "Fizi"];

introduceTeam("Z Team", ...$members);
introduceTeam("X Team", "Upin", "Ipin", ...$members);