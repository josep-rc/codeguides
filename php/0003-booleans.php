<?php

$completed = true;
$completed = TRUE; // also ok (stay consistent)
// evaluations = true excepts:
// integers 0, -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false
var_dump($completed); // bool(true)
var_dump(is_bool($completed)); // bool(true) because $completed is of type bool
echo "{$completed} \n"; // 1 because true.toString() returns 1
$completed = false;
var_dump(is_bool($completed)); // bool(true)
var_dump(is_bool('')); // bool(false) is not of type bool
echo "{$completed} \n";          // "" because false.toString() returns empty string
echo gettype($completed) . "\n"; // boolean
var_dump($completed);            // bool(false)