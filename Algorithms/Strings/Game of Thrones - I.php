<?php
/*
https://www.hackerrank.com/challenges/game-of-thrones/problem
*/

function canAnagram($string)
{
    $len = strlen($string);
    $arr = str_split($string);

    $occ = [];
    foreach ($arr as $letter) {
        if (!isset($occ[$letter])) {
            $occ[$letter] = 1;
        } else {
            $occ[$letter]++;
        }
    }

    $sum = 0;
    foreach ($occ as $letter => $nr) {
        $sum += ($nr % 2);
    }

    if ($sum == $len % 2) return 'YES';
    return 'NO';

}

$string = fgets(STDIN);
die(canAnagram($string));
