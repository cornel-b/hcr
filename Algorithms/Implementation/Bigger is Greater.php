<?php
/*
https://www.hackerrank.com/challenges/bigger-is-greater/problem
*/
function  nextPermutation($ar)
{
    $current = count($ar)-1;
    while ($current > 0 && $ar[$current-1] >= $ar[$current]) {
        $current--;
    }
    if ($current <= 0) {
        return 'no answer';
    }
    $j = count($ar)-1;
    while ($ar[$j] <= $ar[$current-1]) {
        $j--;
    }
    $tmp = $ar[$current-1];
    $ar[$current-1] = $ar[$j];
    $ar[$j] = $tmp;
    $j = count($ar)-1;
    while ($current < $j) {
        $tmp = $ar[$current];
        $ar[$current] = $ar[$j];
        $ar[$j] = $tmp;
        $current++;
        $j--;
    }
    return implode('', $ar);
}

$nr = (int) fgets(STDIN);
for ($i=1; $i<=$nr; $i++) {
    $line = trim(fgets(STDIN));
    $line = str_split($line);
    $res  = nextPermutation($line);
    echo $res . "\n";
}