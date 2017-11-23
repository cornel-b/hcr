<?php
/*
https://www.hackerrank.com/challenges/absolute-permutation/problem
*/
function getPerm($n, $k)
{
    $sign = 1;
    $current = 1;
    while ($current <= $n) {
        if ($k==0) {
            $o[$current] = $current;
            $current++;
        }
        for ($i=0; $i<$k; $i++) {
            if ($sign == 1) $o[$current] = $current  + $k;
            else $o[$current] = $current  - $k;
            if ($o[$current] > $n) return '-1';
            $current++;
        }
        $sign = ($sign == 1) ? 2 : 1;
    }

    return implode(' ', $o);
}

$nr = (int)fgets(STDIN);
for ($i=1; $i<=$nr; $i++) {
    $line = fgets(STDIN);
    $line = explode(' ', trim($line));
    foreach ($line as &$nrr) $nrr = (int) $nrr;
    $n = $line[0];
    $k = $line[1];
    $res[] = getPerm($n, $k);
}
echo implode("\n", $res);