<?php

$i = 0;
// 0123456789101112131415
while ($i <= 15) {
    echo $i++;
    if ($i > 30) {
        continue; // moves to next iteration
    }
    if ($i > 20) {
        break; // break; for 1 level, break 2; breaks for two levels
    };
}

do {
    echo $i++; // add 16
} while ($i <= 15);

// 01234567891011121314
for ($i = 0; $i < 15; $i++) {
    echo $i;
}

$text = ['a', 'b', 'c'];
// for(initialization (first loop), condition (every loop), execute (every loop))
// count() only executed once
for ($i = 0, $length = count($text); $i < $length; $i++) {
    echo $text[$i];
}

// foreach is for arrays or objects
$languages = ['php','python','go'];
foreach ($languages as $language) {
    echo $language . "\n";
}

foreach ($languages as $key=>$language){ // by value assigned, to reference use &$language
    echo $key . ': ' . $language . "\n";
}

echo $language; // already exists