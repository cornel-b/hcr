<?php

/*
https://www.hackerrank.com/challenges/funny-string/problem
*/

function isFunny($string) {

    if (strlen($string) == 1) return 'Funny';

    $rev = strrev($string);
    $n = strlen($string);

    for ($i=1; $i<$n-1; $i++) {
        if (abs(ord($string[$i]) - ord($string[$i-1])) != abs(ord($rev[$i]) - ord($rev[$i-1]))) {
            return 'Not Funny';
        }
    }

    return 'Funny';
}

$res = [];
$nr = (int)fgets(STDIN);
for ($i=1; $i<=$nr; $i++) {
    $str = (string)fgets(STDIN);
    $str = trim($str);
    $res[] = isFunny($str);
}
echo implode("\n", $res);