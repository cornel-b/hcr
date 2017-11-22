<?php

/*
https://www.hackerrank.com/challenges/matrix-rotation-algo/problem
*/

function readData($file = '')
{
    global $n, $m, $r, $arr;
    if ($file != '') {
        $source = @fopen($file, 'r');
    } else {
        $source = STDIN;
    }

    $line = trim(fgets($source));
    $line = explode(' ', $line);
    foreach ($line as &$tmp) $tmp = (int) $tmp;
    $n = $line[0];
    $m = $line[1];
    $r = $line[2];

    $arr = [];
    for ($i=1; $i<=$n; $i++) {
        $line = explode(' ', trim(fgets($source)));
        foreach ($line as &$tmp) $tmp = (int) $tmp;
        $arr[] = $line;
    }
}

$n = $m = $r = 0;
$arr = [];
readData();

// take apart
$mid = min($n, $m) / 2;
$strings = [];
$positions = [];


for ($k=0; $k<$mid; $k++) {
    $position = [];
    $string = [];
    for ($j=$k; $j<$m-$k; $j++) {
        $string[] = $arr[$k][$j];
        $position[] = [$k, $j];
    }
    for ($i=$k+1; $i<$n-$k; $i++)  {
        $string[] = $arr[$i][$m-$k-1];
        $position[] = [$i, $m-$k-1];
    }

    for ($j=$m-$k-2; $j>=$k; $j--) {
        $string[] = $arr[$n-$k-1][$j];
        $position[] = [$n-$k-1, $j];
    }

    for ($i=$n-$k-2; $i>$k; $i--)  {
        $string[] = $arr[$i][$k];
        $position[] = [$i, $k];
    }
    $strings[] = $string;
    $positions[] = $position;
}


// rotate
$newstrings = [];
foreach ($strings as $string) {
    $n = count($string);
    $rotations = $n % $r;
    $rotations = $r % $n;
    $temp = $string;
    $long = array_merge($string, $string);
    $new = array_slice($long, $rotations, count($string));
    $string = $new;
    $newstrings[] = $new;
}
$strings = $newstrings;

// join back
$k = 0;
$arr2 = [];
$arr2 = $arr;

$strs = $strings;
$idx = 0;
foreach ($strings as $string) {
    $position = $positions[$idx];
    $cx = 0;
    foreach ($position as $pos) {
        $number = $string[$cx];
        $i = $pos[0];
        $j = $pos[1];
        $arr2[$i][$j] = $number;
        $cx++;
    }
    $idx++;

}

foreach ($arr2 as $line) {
    ksort($line);
    echo implode(' ' , $line) . "\n";
}