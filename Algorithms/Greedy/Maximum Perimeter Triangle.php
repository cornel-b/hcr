<?php

/*
https://www.hackerrank.com/challenges/maximum-perimeter-triangle/problem
*/

$nr = fgets(STDIN);
$line = fgets(STDIN);
$line = explode(' ', $line);
foreach ($line as &$cnr) $cnr = (int) $cnr;

$max = -1;
$vars = [];
for ($i=0; $i<$nr-2; $i++) {
    $a = $line[$i];
    for ($j=$i+1; $j<$nr; $j++) {
        $b = $line[$j];
        for ($k=$j+1; $k<$nr; $k++) {
            $c = $line[$k];
            if (!($a+$b <= $c || $a+$c<=$b || $c+$b<=$a) && $a+$b+$c > $max) {
                $max = $a+$b+$c;
                $vars = [$a, $b, $c];
            }
        }
    }
}

sort($vars);
if ($max > -1) {
    echo implode(" ", $vars);
}

else echo $max;