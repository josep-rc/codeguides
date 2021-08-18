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




