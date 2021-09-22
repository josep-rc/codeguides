<?php

// https://www.php.net/manual/en/ref.array.php

// array_chunk (divide array in groups)
$items = ['a' => 1, 'b' => 2, 'c' => 3];
print_r(array_chunk($items, 2, true));

// array_combine (combine into keys - values array)
$a1 = ['a', 'b', 'c'];
$a2 = [1, 2, 3];
print_r(array_combine($a1, $a2));

// array_filter (Filters elements of an array using a callback function)
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = array_filter($array, fn($number) => $number % 2 === 0);
print_r($even);

// array_values() returns all the values from the array and indexes the array numerically
print_r(array_values($even));

// array_keys() returns the keys (filter optional)
print_r(array_keys($items));

// array_map() Applies the callback to the elements of the given arrays
$new = array_map(fn($number) => $number * 3, $array);
print_r($new);

// array_merge() Merge one or more arrays
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

// array_reduce() Iteratively reduce the array to a single value using a callback function
// array_reduce(array $array, callable $callback, mixed $initial = null): mixed
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"

$invoiceItems = [
    ['price'=>9.99, 'qty'=>3, 'desc'=>'Item 1'],
    ['price'=>29.99, 'qty'=>1, 'desc'=>'Item 2'],
    ['price'=>19.99, 'qty'=>2, 'desc'=>'Item 3'],
    ['price'=>99.99, 'qty'=>1, 'desc'=>'Item 4']
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

echo "Total: " . $total . "\n";

// array_search() Searches the array for a given value and returns the first corresponding key
// if successful or false if not
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
var_dump($key);

// in_array() Checks if a value exists in an array
var_dump(in_array('blue', $array)); // true

// array_diff()
// array_diff_assoc()
// asort()
// ksort()
// usort()


