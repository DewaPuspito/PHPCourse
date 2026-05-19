<?php

$mb_string = "コンビニエンスストア";
var_dump(mb_strlen($mb_string));

$url = "https://www.example.com/search?q=php+string+functions";

var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));

$html = "<div class='content'>Hello <b>World</b>!</div>";

var_dump(htmlentities($html));

var_dump(base64_encode("Hello World!"));

$encoded = base64_encode("Hello World!");
var_dump(base64_decode($encoded));