<?php

/*
https://www.hackerrank.com/challenges/beautiful-binary-string/problem
*/

function removes($str) {
    $steps = 0;
    $start = strpos($str, '010');
    while (is_integer($start)) {
        $steps++;
        $changeIndex = 2;
        if ($start + 5 <= strlen($str)) {
            $last = substr($str, $start + 2, 3);
            changeval($last, 1);
            if ($last == '010') {
                $changeIndex = 1;
            }
        }
        changeval($str, $start + $changeIndex);
        $start = strpos($str, '010');
    }

    return $steps;
}

function changeval(&$string, $index) {
    $string[$index] = ($string[$index] == '0') ? '1' : '0';
}

$nr = fgets(STDIN);
die(removes(trim(fgets(STDIN))) . '');