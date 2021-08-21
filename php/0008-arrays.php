<?php

$programmingLanguages = ['Java', 'PHP', 'Python', 'Go', 'Rust'];
$devLanguages         = array('PHP', 'TS', 'C++'); // older way

echo $programmingLanguages[1] . "\n";       // PHP
echo $programmingLanguages[-1] . "\n";      // Warning Undefined array key
var_dump(isset($programmingLanguages[2]));  // bool(true)
var_dump(isset($programmingLanguages[5]));  // bool(false)

$programmingLanguages[2] = 'C++';
echo $programmingLanguages[2] . "\n";        // C++
var_dump($programmingLanguages);             // prints all data with types
print_r($programmingLanguages);              // prints data without types
echo count($programmingLanguages) . "\n";    // 5

$programmingLanguages[] = 'PHP';            // Append data at the end
array_push($programmingLanguages, 'Dart', 'C#');
print_r($programmingLanguages);             // prints 8 languages
// Define own keys
$currentVersion = [
    'PHP' => '8.0',
    'C#'  => '6',
    'Go'  => '1.17'
];
echo $currentVersion['PHP'] . "\n"; // 8.0
$currentVersion['Python'] = '3.8';  // Add element
// Multidimensional arrays
$best         = [
    'PHP' => [
        'creator'   => 'Rasmus Lerdorf',
        'extension' => '.php',
        'versions'  => ['8.0', '7.4']
    ]
];
$bestLanguage = 'PHP';
echo $best[$bestLanguage]['versions'][0] . "\n"; // 8.0

var_dump($best['PHP'][10]); // NULL Warning

$a = [0 => 'foo', 1 => 'bar', '1' => 'baz'];          // overwritten key
print_r($a);                                          // Array([0]=>foo [1]=>baz)
$a = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd']; // overwritten key
print_r($a);                                          // Array([1]=>d)

$b = ['a', 'b', 50 => 'c', 'd', 'e'];
print_r($b); // Array([0] => a [1] => b [50] => c [51] => d [52] => e)

$c = [null => 'c'];   // null key are cast to empty string
print_r($c);          // Array([]=>e)

// Remove elements
echo array_pop($b);   // remove last element and return removed element: e
echo array_shift($b); // remove first element and return removed element: a, array is re-indexed (numeric keys)
print_r($b);          // Array([0] => b [1] => c[2] => d)
unset($b[1]);         // remove element with key 1, no re-index
unset($b[0], $b[2]);  // remove the two elements
print_r($b);          // Array()
unset($b); // destroy the array

// cast
$x = 5;
var_dump((array($x))); // [0]=>5
$x = 'foo';
var_dump((array($x))); // [0]=>'foo'
$x = null;
var_dump((array($x))); // []

// array_key_exists
$h = ['a'=>1, 'b'=>2, 'c'=>null];
var_dump(array_key_exists('a', $h)); // true
var_dump(array_key_exists('c', $h)); // true, the key exists
var_dump(isset($h['c'])); // false, the key exists but with value null

