<?php

$firstName = 'Tom';

$fullName = "${firstName} Smith";  // Tom Smith
$fullName = "{$firstName} Smith";  // Tom Smith
$fullName = "$firstName Smith";    // Tom Smith

$lastName = 'Smith';
$name     = $firstName . ' ' . $lastName;
echo $name . "\n";     // Tom Smith
echo $name[0] . "\n";  // T
echo $name[2] . "\n";  // m
echo $name[-2] . "\n"; // t
echo $name[-1] . "\n"; // h

$name[1] = 'O';
echo $name . "\n"; // TOm Smith
$name[15] = 'e';
echo $name . "\n"; // TOm Smith      e

// Heredoc
$text = <<<TEXT
Line 1
Line 2 $name
Line 3 ' "
TEXT;
echo $text;
// To render in html:
echo nl2br($text); // new line to br tag


