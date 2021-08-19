<?php

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
echo "$foo, ${$foo}";       // bar, baz

