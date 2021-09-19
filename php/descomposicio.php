<?php

$x = (int) readline("Número a descomponer: ");
//$x = 212;
echo "\n";
$f = 2;
$r = $x;
$num_chars = strlen((string)$x);
$spaces = 0;

while ($r !== 1) {
  if($r % $f == 0){

      $spaces = $num_chars - strlen((string)$r);
      echo str_repeat(" ",$spaces);

      echo "$r | $f \n";
      $r = $r / $f;

  } else {
      $f++;
  }
}
echo str_repeat(" ",$num_chars-1);
echo "1";