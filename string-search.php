<?php

$haystack = "The quick brown fox jumps over the lazy dog.";
$pos = strpos($haystack, "quick");
var_dump($pos); // int(4)

var_dump(str_replace("lazy", "energetic", $haystack));

preg_match_all("/\w{5}/", $haystack, $matches);

var_dump($matches);