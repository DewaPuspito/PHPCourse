<?php

$superhero = "The Crow";

function revealIdentity() {
    global $superhero;
    $message = "real name is Eric Draven.";
    // $superhero = "Spawn";
    echo "$superhero's $message\n";
}

echo $message;

revealIdentity();
echo "$superhero is the current superhero.\n";

function countVisitors() {
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived.\n";
}

// function getDb() {
//     static $db;

//     if ($db === null) {
//         $db = connect();
//     }

//     return $db;
// }

countVisitors(); // Visitor #1 has arrived.
countVisitors(); // Visitor #2 has arrived.
countVisitors(); // Visitor #3 has arrived.