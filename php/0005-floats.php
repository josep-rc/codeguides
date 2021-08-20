<?php

$x = 13.5;
$x = 13.5e3;               // 13500
$x = 13.5e-3;              // 0.0135
$x = 13_000.5;             // 13000.5

echo PHP_FLOAT_MAX . "\n";     // 1.7976931348623E+308
echo PHP_FLOAT_MIN . "\n";     // 2.2250738585072E-308
echo PHP_FLOAT_EPSILON . "\n"; // 2.2204460492503E-16

$x = ((0.1 + 0.7) * 10);
echo $x . "\n";              // 8
var_dump($x);                // float(7.999999999999999) not really 8
// floor rounds down
var_dump(floor($x));         // float(7) rounded is 7 !
// ceil rounds up
$x = ceil((0.1 + 0.7) * 10); // 8
$x = (0.1 + 0.2) * 10;
var_dump($x);       // float(3.00000000000000004)
var_dump(ceil($x)); // float(4)

$x = 0.23;
$y = 1 - 0.77;
var_dump($x, $y); // float(0.23) float(0.22999999999999998)
// Never compare floats directly

$x = log(-1); // NAN (not a number)
var_dump(is_nan($x)); // bool(true)
$y = PHP_FLOAT_MAX * 2; // INF (infinity)
var_dump(is_infinite($y)); // bool(true)
var_dump(is_finite($y)); // bool(false)

$x = (float) 5;
var_dump($x); // float(5)
$x = (float) 'Joe';
var_dump($x); // float(0)
$x = (float) '34.5true';
var_dump($x); // float(34.5)





