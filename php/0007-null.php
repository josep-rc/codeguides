<?php

// null constant
$x = null;
$y = NULL;
var_dump($x);           // NULL
var_dump($x === null);  // bool(true)
$x = 123;
var_dump($x === null);  // bool(false)

// Not defined
var_dump(is_null($z));  // warning bool(true)
unset($x);              // destroy object
var_dump($x);           // warning NULL
$x = null;
var_dump((string)$x);  // string(0)""
echo $x;               // ""
var_dump((int)$x);     // int(0)
var_dump((bool)$x);    // bool(false)
var_dump((array)$x);    // array(0){}

