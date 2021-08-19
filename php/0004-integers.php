<?php

var_dump(PHP_INT_MAX);     // int(9223372036854775807)
var_dump(PHP_INT_MAX + 1); // float(9.223372036854776E+18)
var_dump(PHP_INT_MIN);     // int(-9223372036854775808)
$x = 0x2A;                 // 42 Hexadecimal
$x = 055;                  // 45 Octal
$x = 0b11;                 // 3 binary
$x = (int)true;            // (int)1
$x = (int)false;           // (int)0
$x = (int)5.98;            // (int)5
$x = (int)'5.9';           // (int)5
$x = (int)'67jo';          // (int)67
$x = (int)'jo';            // (int)0
$x = (int)null;            // (int)0
var_dump(is_int($x));      // bool(true)
$x = 34_000_111;           // 34000111








