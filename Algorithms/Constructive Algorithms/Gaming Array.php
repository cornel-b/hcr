<?php
/*
https://www.hackerrank.com/challenges/an-interesting-game-1/problem
*/

$from = STDIN;
$nr = (int) trim(fgets($from));

for ($i=1; $i<=$nr; $i++) {
    $crt = (int) trim(fgets($from));
    $line = explode(' ', trim(fgets($from)));
    echo getWinner($line) . "\n";
}

function getWinner($array) 
{
    $crt = false;
    $w=0;
    foreach ($array as $nr) {
        if (!$crt) {
        	$crt = $nr;
        }
        if ($crt < $nr) { 
        	$w=1-$w; 
        	$crt = $nr; 
        }
    }
    return ['BOB', 'ANDY'][$w];
}