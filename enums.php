<?php

enum DaysOfWeek {
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}

$today = DaysOfWeek::Monday;

if ($today === DaysOfWeek::Monday) {
    echo "It's Monday!\n";
} else {
    echo "It's not Monday.\n";
}

enum Color: string {
    case Red = '#FF0000';
    case Green = '#00FF00';
    case Blue = '#0000FF';
}

echo Color::Red->value;

function isWeekend(DaysOfWeek $day): bool {
    return $day === DaysOfWeek::Saturday || $day === DaysOfWeek::Sunday;
};

echo isWeekend(DaysOfWeek::Saturday) ? "It's the weekend!" : "It's a weekday.";