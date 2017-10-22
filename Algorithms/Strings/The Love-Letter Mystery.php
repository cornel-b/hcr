<?php
/*
https://www.hackerrank.com/challenges/the-love-letter-mystery/problem
*/

function convertToPalindrome($str)
{
    $mid = floor(strlen($str) / 2);
    $max = strlen($str) - 1;

    $nr = 0;
    for ($i=0; $i<$mid; $i++) {
        $letter1 = $str[$i];
        $letter2 = $str[$max-$i];
        $nr += abs(ord($letter1) - ord($letter2));
    }

    return $nr;
}


$res = [];
$nr = (int)fgets(STDIN);
for ($i=1; $i<=$nr; $i++) {
    $str = (string)fgets(STDIN);
    $str = trim($str);
    $res[] = convertToPalindrome($str);
}
echo implode("\n", $res);
