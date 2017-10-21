<?php
/*
https://www.hackerrank.com/challenges/camelcase/problem
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);

$nr = 0;
for ($i=0; $i<strlen($s)-1; $i++) {
    if (strtolower($s[$i]) == $s[$i] && strtolower($s[$i+1]) != $s[$i+1]) {
        $nr++;
    }
}
$nr++;
echo $nr;