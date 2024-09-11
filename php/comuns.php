<?php

$r = gmp_strval(gmp_lcm(120, 25));
echo $r . "\n";

function descompondre(int $n)
{
    $d = [];
    $f = 2;
    $r = $n;
    while ($r !== 1) {
        if ($r % $f == 0) {
            $d[] = $f;
            $r   = $r / $f;
        } else {
            $f++;
        }
    }
    return $d;
}

function mcd(int $n1, int $n2): int
{
    $result = 1;
    $v1 = array_count_values(descompondre($n1));
    $v2 = array_count_values(descompondre($n2));
    foreach ($v1 as $index => $item) {
        if(isset($v2[$index])) {
            if($item>$v2[$index]){
                $result *= $index**$v2[$index];
            }else{
                $result *= $index**$item;
            }
        }
    }
    return $result;
}

echo mcd(3000, 420) . "\n";

function mcm(int $n1, int $n2): int
{
    return ($n1*$n2)/mcd($n1,$n2);
}

echo mcm(120,25);
