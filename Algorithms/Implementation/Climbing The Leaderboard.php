<?php

$from = STDIN;

$nr = (int) trim(fgets($from));
$ranks = array_map('intval', explode(' ', trim(fgets($from))));

$ns = (int) trim(fgets($from));
$scores = array_map('intval', explode(' ', trim(fgets($from))));

$ranks = array_unique($ranks);
$ranks = array_combine(array_values($ranks), array_keys($ranks));

$position = 1;
foreach ($ranks as $key => $value) {
    $ranks[$key] = $position;
    $position++;
}

$ranks = array_combine(array_values($ranks), array_keys($ranks));

$maxKey = max(array_keys($ranks));
$position = $maxKey + 1;

$indexUp = max(array_keys($ranks));
$scoreUp = $ranks[$indexUp];

foreach ($scores as $score) {
    $thisPosition = -1;
    if ($score < $scoreUp) {
        $thisPosition = $indexUp;
    } else {
        while ($ranks[$indexUp] <= $score && $indexUp>0) {
            $indexUp--;
        }
        $thisPosition = $indexUp;
    }
    $position = $thisPosition+1;
    echo "$position\n";
}