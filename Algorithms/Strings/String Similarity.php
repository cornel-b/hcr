<?php

/*
https://www.hackerrank.com/challenges/string-similarity/problem
*/

function stringSimilarity($s) {
    $n = strlen($s);
    $l = 0;
    $r = 0;
    $z = [];

    for ($i=1; $i<$n; $i++) {
        if ($i > $r) {
            $l = $r = $i;
            while ($r < $n && $s[$r-$l] == $s[$r]) $r++;
            $z[$i] = $r-$l;
            $r--;
        } else {
            $k = $i-$l;
            if ($z[$k] < $r-$i+1) $z[$i] = $z[$k];
            else {
                $l = $i;
                while ($r < $n && $s[$r-$l] == $s[$r]) $r++;
                $z[$i] = $r-$l;
                $r--;
            }
        }
    }

    return array_sum($z) + $n;
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_t_cases);
for ($_t_i=0; $_t_i<$_t_cases; $_t_i++) {
    $_a = trim(fgets($__fp));
    $res = stringSimilarity($_a);
    echo "$res\n";
}