<?php

declare(strict_types=1);

function foo(): int
{
    return 1;
}
var_dump(foo()); // int(1)

function boo(): void
{
}
var_dump(boo()); // NULL

// return int or null
function roo(): ?int
{
    return null;
}
var_dump(roo()); // NULL

// return int or float
function poo(): int|float
{
    return 1.5;
}
var_dump(poo()); // float(1.5)

// mixed type for all data types
// not recommended
function loo(): mixed{
    return 'lol';
}

function multiply(int|float $x, int|float $y = 10): int|float{
    return $x * $y;
}
var_dump(multiply(5,10.2)); // float(51)
var_dump(multiply(5)); // int(50)

function sum(int|float...$numbers): int|float{
    return array_sum($numbers);
}
var_dump(sum(8, 9, 0, 12)); // int(29)
$nums = [1,3,7];
var_dump(sum(9,4,...$nums));

// named arguments
function greed($name='', $email='', $age=20){
    echo $name, $email, $age, "\n";
}
greed(name: 'Joel', age: 34); // Joel34

$arr = ['age'=>23,'name'=>'Bill'];
greed(...$arr); // Bill23

// Usage of global scope variable
$gv = 5;
function goo(){
    global $gv;
    var_dump($gv);
    $gv++;
}
goo(); // int(5)
// Access trow $GLOBALS['gv'] available (avoid)
print_r($GLOBALS['gv']); // 6

// Variable functions
$x = 'sum';
echo "\n" . $x(1,2,3) . "\n"; // 6 call to sum function (defined above)

var_dump(is_callable($x)); // bool(true) cause exists sum function
$name = 'Josep';

// Anonymous functions
$greet = function() use ($name) // to access parent variables
{
    echo "Hello ", $name;
}; // semicolon is required
$greet();

// callback functions
$array = [1,2,3,4];
$array2 = array_map(function($element){
    return $element *2;
}, $array);
print_r($array);
print_r($array2);

// Arrow functions
$y = 5; // no need to use 'use' to access parent scope variables
// returns a single expression
$array2 = array_map(fn($number) => $number * $number * $y,$array);
print_r($array2);
