<?php

/*
https://www.hackerrank.com/challenges/minimum-absolute-difference-in-an-array/problem
*/

$handle = fopen("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = trim(fgets($handle));
$a = explode(" ",$a_temp);
array_map('intval', $a);
$min = false;
sort($a);
$nr = count($a);
for ($i=1; $i<$nr; $i++) {
    $val = abs($a[$i] - $a[$i-1]);
    if ($min > $val || $min === false) $min = $val;
}
echo $min;