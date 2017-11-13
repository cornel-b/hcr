<?php

/*
https://www.hackerrank.com/challenges/jim-and-the-orders/problem
*/

class SortTakes extends SplMinHeap
{
    function compare($a, $b)
    {
        if ($a['total'] == $b['total']) {
            return ($a['index'] > $b['index']) ? -1 : 1;
        }
        return ($a['total'] > $b['total']) ? -1 : 1;
    }
}


function getOcc($string)
{
    $len = strlen($string);
    $arr = str_split($string);

    $occ = [];
    foreach ($arr as $letter) {
        if (!isset($occ[$letter])) {
            $occ[$letter] = 1;
        } else {
            $occ[$letter]++;
        }
    }

    return $occ;
}


$res = [];
$nr = (int)fgets(STDIN);
$starts = [];
$takes = [];

$spl = new SortTakes();

for ($i=1; $i<=$nr; $i++) {
    $str = (string)fgets(STDIN);
    $str = trim($str);
    $str = explode(' ', $str);
    $start = $str[0];
    $take  = $str[1];

    $item = [
        'index' => $i,
        'start' => $start,
        'take'  => $take,
        'total' => $start + $take,
    ];

    $spl->insert($item);
}

$res = [];
foreach($spl as $item) {
    $res[] = $item['index'];
}

echo implode(" ", $res);
