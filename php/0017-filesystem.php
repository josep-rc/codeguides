<?php

$dir = scandir(__DIR__);
print_r($dir); // array with directories and files

var_dump(is_file($dir[3]));
var_dump(is_dir($dir[3]));

// Create a directory
mkdir('my_directory');
// Remove a directory (Warning if not empty)
rmdir('my_directory');

var_dump(file_exists('README.md'));

var_dump(filesize('README.md')); // Uses caché

clearstatcache(); // Clear caché

file_put_contents('file_test.txt', "hello world". "\n" . "how are you");
// Open for read, @ suppress de warning if file not exists (not recommended)
$file = @fopen('file_test.txt', 'r');

// fgets or fgetscsv (comma separated by default)
while (($line = fgets($file)) !== false){
    echo $line;
}

fclose($file);
echo "\n";
$content = file_get_contents('file_test.txt', offset: 3, length: 2);
var_dump($content);

// copy file
copy('file_test.txt', 'to_delete.txt');

// rename
rename('to_delete.txt', 'delete.txt');

// delete file
unlink('delete.txt');

print_r(pathinfo('file_test.txt'));



