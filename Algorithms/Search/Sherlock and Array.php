<?php

/*
https://www.hackerrank.com/challenges/sherlock-and-array/problem
*/
function nrExists($array, $total)
{
    if (count($array) < 2) return 'YES';

    $left = 0;
    for ($i=0; $i<count($array)-1;$i++) {
        if (2 * $left == $total - $array[$i]) return 'YES';
        $left += $array[$i];

    }

    return 'NO';
}

$cases = (int) fgets(STDIN);

for ($i=1; $i<=$cases; $i++) {

    $number = (int) fgets(STDIN);
    $values = trim(fgets(STDIN));
    $values = explode(' ', $values);
    $total = 0;
    foreach ($values as &$value) {
        $value = (int) $value;
        $total += $value;
    }
    $res[] = nrExists($values, $total);
}

echo implode("\n", $res);
