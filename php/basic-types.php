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

$name = "Josep";
echo gettype($name) . "\n"; //string
var_dump($name); // string(5) "Josep"

$data = [1, 2, "Hello", true, 0.8];
print_r($data); // Array([0]=>1 [1]=>2 [2]=>Hello [3]=>1 [4]=>0.8)

$score = 75; // int 75
$score = '75'; // string "75"
$x = 2;
// juggling: a variable's type is determined by the context in which the variable is used
// declare(strict_types)=1; to disable juggling
$result = $score * $x;
var_dump($result); // int(150)
$score = (int) '75'; // casting
var_dump($score); // int(75)
