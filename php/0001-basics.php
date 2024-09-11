<?php
// One line comment
# One line comment
/*
 * Multiline comment
 */
/**
 * Doc block
 */
echo "Hello World";         // prints Hello World
print "Hello World!";       // prints Hello World and returns 1
print("Hello World");       // prints Hello World
echo("Hello");              // prints Hello
echo 'Hello', ' ', 'World'; // prints Hello World
// echo is faster than print

echo 'Josep\'s invoice';    // prints Josep's invoice
echo "Josep's invoice";     // prints Josep's invoice

// variable
$name = 'Josep';            // variable names can start with letters or _
echo $name;                 // prints Josep

// by default variables are assigned by value
$x = 1;
$y = $x;    // by value
$z = &$x;   // by reference
$x = 3;
echo $y;    // prints 1
echo $z;    // prints 3

echo 'Hello $name';     // prints Hello $name
echo "Hello $name";     // prints Hello Josep
echo "Hello {$name}";   // prints Hello Josep -> recommended
echo 'Hello ' . $name;  // prints Hello Josep

echo "\n"; // line break
// https://misc.flogisoft.com/bash/tip_colors_and_formatting
echo "\033[33m- some colored text \033[0m some white text \n"; // print with color (terminal)

// Constants
const STATUS = 'paid';
// or
define('MY_NAME', 'Josep');
$is_name_defined = defined('MY_NAME'); // true
// PHP constants
echo PHP_VERSION . "\n";    // 8.0.7
echo __LINE__ . "\n";       // 10

// Variable variables
$foo  = 'bar';              // dynamic types
$$foo = 'baz';              // same as $bar = 'baz';
echo "$foo, {$$foo}\n";     // bar, baz
echo "$foo, {${$foo}}";     // bar, baz

// array
$data = [1, 2, "Hello", true, 0.8];
print_r($data); // Array([0]=>1 [1]=>2 [2]=>Hello [3]=>1 [4]=>0.8)

// juggling: a variable's type is determined by the context in which the variable is used
// declare(strict_types)=1; to disable juggling
$score = 75; // int 75
$score = '75'; // string "75"
$x = 2;
$result = $score * $x;
var_dump($result); // int(150)
$score = (int) '75'; // casting
var_dump($score); // int(75)
