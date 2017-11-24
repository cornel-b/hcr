<?php

/*
https://www.hackerrank.com/challenges/encryption/problem
*/
function getMatrix($string)
{
    $string = str_replace(' ', '', $string);
    $len = strlen($string);
    $rowsCols = splitInRowsColumns($len);
    $rows = $rowsCols[0];
    $cols = $rowsCols[1];

    $arr = [];
    $current = [];
    for ($i=0; $i<$len; $i++) {
        $letter = $string[$i];
        if (count($current) < $cols) {
            $current[] = $letter;
        } else {
            $arr[] = $current;
            $current = [];
            $current[] = $letter;
        }
    }

    if (count($current) > 0) {
        $arr[] = $current;
    }


    $strings = [];
    for ($i=0; $i<$cols; $i++) {
        $string = [];

        for ($j=0; $j<$cols; $j++) {
            if (isset($arr[$j][$i])) {
                $string[] = $arr[$j][$i];
            }
        }
        $strings[] = implode('', $string);
    }
    return implode(' ', $strings);
}


function splitInRowsColumns($number)
{
    $floor = floor(sqrt($number));
    $ceil  = ceil(sqrt($number));
    if ($ceil == $floor) return [$ceil, $floor];
    return [$floor, $ceil];
}

$string = trim(fgets(STDIN));
echo getMatrix($string);