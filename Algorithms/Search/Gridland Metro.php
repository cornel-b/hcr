<?php
/*
https://www.hackerrank.com/challenges/gridland-metro/problem
*/

$from = STDIN;

$line = explode(' ', trim(fgets($from)));
foreach ($line as &$nr) $nr = (int) $nr;

$n = $line[0];
$m = $line[1];
$k = $line[2];

$queries = [];

for ($i=1; $i<=$k; $i++) {
    $line = explode(' ', trim(fgets($from)));
    foreach ($line as &$nr) $nr = (int) $nr;

    $row = $line[0];
    $start = $line[1];
    $end = $line[2];

    if (!array_key_exists($row, $queries)) {
        $queries[$row] = [];
    }

    $overlap = false;
    foreach ($queries[$row] as $index => $query) {
        if ($start <= $query[1] && $query[0] <= $end) {
            $mergedStart = min($start, $query[0]);
            $mergedEnd = max($end, $query[1]);
            $overlap = true;
            unset($queries[$row][$index]);
            $queries[$row][] = [$mergedStart, $mergedEnd];
        }
    }

    if (!$overlap) {
        $queries[$row][] = [$start, $end];
    }

}

$total = $n * $m;
foreach ($queries as $row => $rowQueries) {
    foreach ($rowQueries as $query) {
        $start = $query[0];
        $end = $query[1];
        $total -= $end - $start + 1;
    }
}

if ($total < 0) $total = 0;
echo $total;