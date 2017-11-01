<?php

/*
https://www.hackerrank.com/challenges/flipping-bits/problem
*/

$from = STDIN;

$testcases = (int) trim(fgets($from));

for ($i=1; $i<=$testcases; $i++) {
    $nr = (int) trim(fgets($from));
    $bin = decbin($nr);
    $bin = str_pad($bin, 32, '0', STR_PAD_LEFT);
    $dec = str_replace('0', '2', $bin);
    $dec = str_replace('1', '0', $dec);
    $dec = str_replace('2', '1', $dec);
    $decc = bindec($dec);
    echo "$decc\n";
}