<?php

/*
https://www.hackerrank.com/challenges/sherlock-and-the-beast/problem
*/

function largestNumber($n)
{
    if ($n < 3) return -1;
    if ($n == 3) return solFor(3, 0);
    if ($n == 4) return -1;
    if ($n == 5) return solFor(0, 5);

    $max3 = floor($n / 3);
    for ($i = $max3; $i>=0; $i--) {
        $n0 = $n - ($i * 3);

        if ($n0 == 0) {
            return solFor($i * 3, 0 * 5);
        }

        if ($n0 % 5 == 0) {
            return solFor($i * 3, $n0);
        }

    }
    if ($n % 5 == 0) {
        return solFor(0, $n);
    }


    return -1;

}

function solFor($n3, $n5)
{
    $text = '';
    for ($i=1; $i<=$n3; $i++) $text .= '5';
    for ($i=1; $i<=$n5; $i++) $text .= '3';
    return $text;
}

    
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
    echo largestNumber($n) . "\n";
}