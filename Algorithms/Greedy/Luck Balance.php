<?php
/*
https://www.hackerrank.com/challenges/luck-balance/problem
*/

$line = trim(fgets(STDIN));
$line = explode(' ', $line);
$tot = (int)$line[0];
$nr  = (int)$line[1];


for ($i=0; $i<$tot; $i++) {
    $line = trim(fgets(STDIN));
    $line = explode(' ', $line);
    $x1   = (int) $line[0];
    $x2   = (int) $line[1];
    $pairs[] = [$x1, $x2];
}

for ($i=0; $i<count($pairs); $i++) {
    for ($j=$i+1; $j<count($pairs); $j++) {

        if (!isGreater($pairs[$i], $pairs[$j])) {
            $temp = $pairs[$i];
            $pairs[$i] = $pairs[$j];
            $pairs[$j] = $temp;
        }

    }
}

function isGreater($pair1, $pair2) {
    if ($pair1[1] == 1 && $pair2[1] == 0) return true;
    if ($pair1[1] == 1 && $pair2[1] == 1 && $pair1[0] > $pair2[0]) return true;
    return false;
}

$important = $nr;

$luck = 0;

foreach ($pairs as $pair) {
    if ($pair[1] == 1) {

        if ($important > 0) {
            $luck += $pair[0];
            $important--;
        } else {
            $luck -= $pair[0];
        }
    }

    if ($pair[1] == 0) {
        $luck += $pair[0];
    }
}

echo $luck;