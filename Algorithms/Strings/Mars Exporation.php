<?php

/*
https://www.hackerrank.com/challenges/mars-exploration/problem
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s", $s);

$nr = 0;
for ($i=0; $i<strlen($s); $i++) {
    
    if ($i%3==0 && $s[$i] != 'S') $nr++;
    if ($i%3==1 && $s[$i] != 'O') $nr++;
    if ($i%3==2 && $s[$i] != 'S') $nr++;
}
echo $nr;