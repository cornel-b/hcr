<?php
/*
https://www.hackerrank.com/contests/projecteuler/challenges/euler089/problem
*/
$values = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
$fullValues = [
    'M'  => 1000,
    'CM' => 900,
    'D'  => 500,
    'CD' => 400,
    'C'  => 100,
    'XC' => 90,
    'L'  => 50,
    'XL' => 40,
    'X'  => 10,
    'IX' => 9,
    'V'  => 5,
    'IV' => 4,
    'I'  => 1,
    ];

function convertRomanToArray($string)
{
    global $values;
    $res = str_split($string);

    foreach ($res as &$char) {
        $char = @$values[$char];
    }

    return $res;
}

function romanToNormal($string)
{
    $arr = convertRomanToArray($string);
    $sum = 0;
    for ($i=1; $i<=count($arr); $i++) {
        $previous = $arr[$i-1];
        if (!isset($arr[$i])) {
            $sum += $previous;
            break;
        }
        $current = $arr[$i];
        if ($current > $previous) {
            $sum -= $previous;
        } else {
            $sum += $previous;
        }
    }

    return $sum;
}

function normalToRoman($number)
{
    global $fullValues;
    $reps = [];
    while ($number > 0) {
        foreach ($fullValues as $rep => $num) {
            if ($num <= $number) {
                $number -= $num;
                $reps[] = $rep;
                break;
            }
        }
    }

    return implode('', $reps);
}


$lineCount = fgets(STDIN);
for ($i=1; $i<=$lineCount; $i++) {
    $line = fgets(STDIN);
    $line = trim($line);
    $res = romanToNormal($line);
    $res2 = normalToRoman($res);
    echo "$res2\n";
}