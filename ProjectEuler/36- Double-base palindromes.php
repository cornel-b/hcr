<?php

/*
https://www.hackerrank.com/contests/projecteuler/challenges/euler036/problem
*/

$line = array_map('intval', explode(' ', trim(fgets(STDIN))));
$n = $line[0];
$k = $line[1];

function isPalindrome($n) {
    return (string)$n == strrev($n);
}

$sum = 0;
for ($i=1; $i<$n; $i++) {
    if (!isPalindrome($i)) continue;
    $nrk = base_convert($i, 10, $k);
    if (isPalindrome($nrk)) $sum += $i;
}

echo $sum;