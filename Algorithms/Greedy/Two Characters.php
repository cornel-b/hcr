<?php

/*
 * https://www.hackerrank.com/challenges/two-characters
 */

$from = STDIN;
$count = (int) trim(fgets($from));
$string = trim(fgets($from));

function isValid($string)
{
    for ($i=0; $i<strlen($string)-2; $i++) {
        if ($string[$i] != $string[$i+2]) {
            return false;
        }
    }
    return true;
}

// get number of distinct chars
$distinct = [];
for ($i=0; $i<strlen($string); $i++) {
    $char = $string[$i];
    if (!array_key_exists($char, $distinct)) {
        $distinct[$char] = 0;
    }
    $distinct[$char]++;
}

$max = 0;
foreach ($distinct as $letter1 => $value1) {
    foreach ($distinct as $letter2 => $value2) {
        if ($letter1 == $letter2) continue;
        $cstring = $string;
        for ($k=0; $k<strlen($cstring); $k++) {
            if (!in_array($cstring[$k], [$letter1, $letter2])) {
                $cstring[$k] = '.';
            }
        }
        $cstring = str_replace('.', '', $cstring);
        if (isValid($cstring)) {
            if (strlen($cstring) > $max) {
                $max = strlen($cstring);
            }
        }
    }
}

echo $max;