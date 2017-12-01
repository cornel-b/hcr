<?php

/*
https://www.hackerrank.com/challenges/connected-cell-in-a-grid/problem
*/

$n = (int) fgets(STDIN);
$m = (int) fgets(STDIN);

$array   = [];
$visited = [];
$counts  = [];
for ($i=1; $i<=$n; $i++) {
    $line = fgets(STDIN);
    $line = explode(' ', $line);
    foreach ($line as &$nr) $nr = (int) $nr;
    $array[] = $line;
    $visited[] = array_fill(0, $m, 0);
}

$current = 2;
for ($i=0; $i<$n; $i++) {

    for ($j=0; $j<$n; $j++) {

        if ($array[$i][$j] == 1) {
            fillArea($i, $j, $current);
            $current++;
        }

    }

}

function fillArea($i, $j, $current)
{
    global $array, $visited, $counts;

    if ($array[$i][$j] != 1 || $visited[$i][$j] == 1) {
        return false;
    }

    $array[$i][$j] = $current;
    $visited[$i][$j] = 1;
    $counts[$current]++;

    fillArea($i-1, $j-1, $current);
    fillArea($i-1, $j,   $current);
    fillArea($i-1, $j+1, $current);
    fillArea($i,   $j-1, $current);
    fillArea($i,   $j+1, $current);
    fillArea($i+1, $j-1, $current);
    fillArea($i+1, $j,   $current);
    fillArea($i+1, $j+1, $current);
}

arsort($counts);
echo(array_values($counts)[0]);
