<?php

// Arithmetics + - * / % **
$x = 2;
$y = 3;

var_dump($x ** $y); // int(8)

$z = +'-2';     // casting with +
var_dump($z);   // int(-2)

// var_dump($z/0); // Fatal error Division by zero
var_dump(fdiv($z, 0)); // float(-INF)

$x = 7.5;
var_dump($x % $y); // int(1) % always cast operators to int
var_dump(fmod($x, $y));  // float(1.5) module with floats

$x = 10;
$y = -3;
var_dump($x % $y); // int(1)
$x = -10;
$y = 3;
var_dump($x % $y); // int(-1) sign depends on first operator

// Assignment = += -= *= /= %= **=
$x = $y = 10;
var_dump($x, $y);   //int(10) int(10)
$x = ($y = 10) + 5; // not recommended
var_dump($x, $y);   //int(15) int(10)
$x = 5;
$x *= 3;            // same as $x = $x * 3
var_dump($x);       // int(15)

// String operators . .=
$x = 'Hello';
$x .= ' World';
var_dump($x); // string(11) "Hello World"

// Comparison == === != <> !!= < > <= >= <=> ?? ?:
$x = 7;
$y = '5';
var_dump($x == $y);     // true, compare with casting
var_dump($x === $y);    // false
var_dump($x != $y);     // false, not equals compare with casting
var_dump($x !== $y);    // true, not equals
var_dump($x <=> $y);    // int(0) 0 equals, -1 if $x<$y, 1 if $x>$y

$r = $y === true ? '$y is true' : '$y is false';
var_dump($r);

$x = null;
$y = $x ?? 'hello'; // if $x is not null, $y = $x, else $y = 'hello'
var_dump($y);       // 'hello'

// Error control @
$x = @file('foo.txt'); // with @ no trows error, no recommended

// Increment / Decrement ++ --
$x = 5;
var_dump($x++);  // 5 post increment
var_dump($x);    // 6
var_dump(++$x);  // 7 pre increment
var_dump($x);    // 7

// Logical && || ! and or xor
$x = true;
$y = false;
var_dump($x && $y);  // false
var_dump($x || $y);  // true
var_dump(!$x);             // false
var_dump(!$y);             // true
var_dump($x and $y); // false
$z = $x and $y; // '=' operator precedes 'and' operator attention!!
var_dump($z);   // true attention!!

// Arrays + == === != <> !==
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g'];
$z = $x + $y; // already defined keys are not overwritten
print_r($z); // Array([0]=>a [1]=>b [2]=>c [3]=>g)

$x = ['a' => 1, 'b' => 2];
$y = ['c' => 1];
$z = $x + $y;
print_r($z); //Array([a] => 1[b] => 2[c] => 1)

var_dump($x == $y); // false

$y = ['a' => 1, 'b' => '2'];
var_dump($x == $y); // true
var_dump($x === $y); // false

$y = ['b' => 2, 'a' => 1]; // changing the order
var_dump($x == $y); // true
var_dump($x === $y); // false

// Operator Precedence
// https://www.php.net/manual/en/language.operators.precedence.php
$x = 5 + 3 * 5; // 20
echo $x."\n";

$x = true;
$y = false;
var_dump($x && ! $y); // true




