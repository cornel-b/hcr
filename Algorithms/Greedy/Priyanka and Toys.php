<?php

/*
https://www.hackerrank.com/challenges/priyanka-and-toys/problem
*/

function readData($file = '')
{
    if ($file != '') {
        $source = @fopen($file, 'r');
    } else {
        $source = STDIN;
    }

    $line = trim(fgets($source));
    $line = trim(fgets($source));
    $line = explode(' ', $line);
    foreach ($line as &$tmp) $tmp = (int) $tmp;

    $temp = new SplMinHeap();
    foreach ($line as $weight) {
        $temp->insert($weight);
    }

    $weights = [];
    foreach ($temp as $value) {
        $weights[] = $value;
    }

    return $weights;
}

$weights = readData();
$lastWeight = $weights[0];
$units = 1;
for ($i=0; $i<count($weights); $i++) {
    $weight = $weights[$i];
    if (!($lastWeight <= $weight && $weight <= $lastWeight+4)) {
        $units++;
        $lastWeight = $weight;
    }
}
echo $units;
