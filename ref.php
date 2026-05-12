<?php

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Jonah";

var_dump($person, $client);

$person = "Joe";

var_dump($person, $client);