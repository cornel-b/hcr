<?php
/*
https://www.hackerrank.com/challenges/flatland-space-stations/problem
*/

$from = STDIN;

$line = fgets($from);
$line = explode(' ', $line);
$n = $line[0];
$k = $line[1];

$line = fgets($from);
$arr  = explode(' ', $line);
foreach ($arr as &$nr) $nr = trim($nr);
array_walk($arr, 'intval');

$min = min($arr);
$first = -$min;

$arr[] = $first;

sort($arr);
$max = max($arr);
$last = $n + ($n - $max) - 1;
$arr[] = $last;

$diff = -1;
for ($i=0; $i<count($arr)-1; $i++) {
    $crt = $arr[$i];
    $next = $arr[$i+1];
    $cdiff = floor(($next - $crt) / 2);
    if ($cdiff > $diff) {
        $diff = $cdiff;
    }
}

if ($diff == -1) {
    $diff = 0;
}

echo $diff;