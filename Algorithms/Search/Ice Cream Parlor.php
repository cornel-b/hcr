<?php

/*
https://www.hackerrank.com/challenges/icecream-parlor/problem
*/

function canTransform($array, $amount)
{
    for ($i=0; $i<count($array)-1; $i++) {
        for ($j=$i+1; $j<count($array); $j++) {
            if ($array[$i] + $array[$j] == $amount) return ($i+1) . " " . ($j+1);
        }
    }
    return "";
}

$cases = (int) fgets(STDIN);

for ($i=1; $i<=$cases; $i++) {

    $amount = (int) fgets(STDIN);
    $numbers = (int) fgets(STDIN);
    $values = trim(fgets(STDIN));
    $values = explode(' ', $values);
    foreach ($values as &$value) {
        $value = (int) $value;
    }
    $res[] = canTransform($values, $amount);
}

echo implode("\n", $res);