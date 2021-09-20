<?php

// int, Unix timestamp in seconds
$currentTime = time();

echo $currentTime . "\n"; // 1632121292

// https://www.php.net/manual/en/datetime.format
// Current time
echo date('d/m/Y g:ia') . "\n"; // 20/09/2021 7:06am
$tomorrow = $currentTime + 1 * 24 * 60 * 60;
echo date('j-n-y G:i:s', $tomorrow) . "\n"; // 21-9-21 7:06:44

// By default is set in php.ini
// https://www.php.net/manual/en/timezones.php
echo date_default_timezone_get() . "\n"; // UTC

date_default_timezone_set('Europe/Madrid');

date_default_timezone_set('NZ');

echo date('j-n-y G:i:s', $tomorrow) . "\n"; // 21-9-21 19:06:44

// Get Unix timestamp for a date
// https://www.php.net/manual/en/function.mktime.php
echo date('j-n-y G:i:s', mktime(1,10,30,1,1,10)) . "\n"; // 1-1-10 1:10:30

// String to timestamp
echo strtotime('2021-01-18 07:00:00') ."\n"; // 1610906400

echo strtotime('tomorrow') ."\n"; // 1632139200

$date = date('j-n-y G:i:s', strtotime('last day of february 2022')); // 28-2-22 0:00:00
print_r(date_parse($date));
