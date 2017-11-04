<?php

/*
https://www.hackerrank.com/challenges/grid-challenge/problem
*/

function canOrder($arr)
{
    foreach ($arr as &$line) {
        for ($i=0; $i<count($line)-1; $i++) {
            for ($j=$i+1; $j<count($line); $j++) {
                if ($line[$i] > $line[$j]) {
                    $aux = $line[$i];
                    $line[$i] = $line[$j];
                    $line[$j] = $aux;
                }
            }
        }
    }

    for ($i=0; $i<count($arr); $i++) {
        $str = '';
        for ($j=0;$j<count($arr);$j++) {
            $str .= $arr[$j][$i];
        }

        for ($k=0; $k<strlen($str)-1;$k++) {
            for ($p=$k+1; $p<strlen($str); $p++) {
                if ($str[$k] > $str[$p]) {
                    return 'NO';
                }
            }
        }

    }
    return 'YES';

}

$res = [];
$testcases = (int)fgets(STDIN);
for ($i=1; $i<=$testcases; $i++) {
    $nr = (int)fgets(STDIN);
    $arr = [];
    $str = '';
    for ($j=1; $j<=$nr; $j++) {
        $line = trim(fgets(STDIN));
        $line = str_split($line);
        $arr[] = $line;
    }
    $res[] = canOrder($arr);
}
print_r(implode("\n", $res));