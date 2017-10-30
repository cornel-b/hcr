<?php

/*
https://www.hackerrank.com/challenges/making-anagrams/problem
*/

function getOcc($string)
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
    return $occ;
}

function canAnagram($string1, $string2)
{

    $occ1 = getOcc($string1);
    $occ2 = getOcc($string2);

    foreach ($occ1 as $letter => $occ) {

        if (isset($occ2[$letter])) {
            $nr1 = $occ;
            $nr2 = $occ2[$letter];
            $rem = abs($nr1 - $nr2);
            unset($occ2[$letter]);

            if ($rem == 0) unset($occ1[$letter]);
            else $occ1[$letter] = $rem;
        }
    }

    $sum = 0;
    foreach ($occ1 as $key => $value) $sum += $value;
    foreach ($occ2 as $key => $value) $sum += $value;
    return $sum;

}

$string1 = fgets(STDIN);
$string2 = fgets(STDIN);
$string1 = trim($string1);
$string2 = trim($string2);
echo (canAnagram($string1, $string2));