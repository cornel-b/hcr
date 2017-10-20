<?php
/*
https://www.hackerrank.com/challenges/the-power-sum/problem
*/

$from = STDIN;

$nr = (int) trim(fgets($from));
$p = (int) trim(fgets($from));

$total = 0;


function getSolRec($nr, $list) {
    global $total, $p;

    $current = (count($list) < 1) ? 1 : max($list) + 1;

    if ($nr === 0) {
        $total++;
    }

    if ($nr < 0) {
        return;
    }

    for ($i=$current; $i<$nr; $i++) {
        if (empty($list)) {
            $new = [$i];
        } else {
            $new = array_merge($list, [$i]);
        }
        getSolRec($nr-pow($i, $p), $new);
    }
}


getSolRec($nr, []);

echo "$total";