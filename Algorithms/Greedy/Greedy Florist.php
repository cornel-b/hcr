<?php
/*
https://www.hackerrank.com/challenges/greedy-florist/problem
*/

function readData($file = '')
{
    global $n, $k, $costs;
    if ($file != '') {
        $source = @fopen($file, 'r');
    } else {
        $source = STDIN;
    }

    $line = trim(fgets($source));
    $line = explode(' ', $line);
    foreach ($line as &$tmp) $tmp = (int) $tmp;
    $n = $line[0];
    $k = $line[1];

    $line = trim(fgets($source));
    $line = explode(' ', $line);
    foreach ($line as &$tmp) $tmp = (int) $tmp;

    $temp = new SplMaxHeap();
    foreach ($line as $weight) {
        $temp->insert($weight);
    }

    $costs = [];
    foreach ($temp as $value) {
        $costs[] = $value;
    }

}

function getTotalCost($flowers)
{
    $totalCost = 0;
    foreach ($flowers as $ii => $personFlowers) {
        $currentCost = 0;
        $index = 0;
        foreach ($personFlowers as $cost) {
            $index++;
            $currentCost += $index * $cost;
        }
        $totalCost += $currentCost;
    }
    return $totalCost;
}


$n = 0;
$k = 0;
$costs = [];
readData();

if ($k >= count($costs)) {
    $totalCost = array_sum($costs);
    die("$totalCost");
}


$crt = 0;

$flowers = [];
foreach ($costs as $i => $cost) {
    $flowers[$crt][] = $cost;
    $crt++;
    if ($crt >= $k) $crt=0;
}

echo getTotalCost($flowers);