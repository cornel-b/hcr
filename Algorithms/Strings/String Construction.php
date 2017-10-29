<?php
/*
https://www.hackerrank.com/challenges/string-construction
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
for($a0 = 0; $a0 < $n; $a0++){
    fscanf($handle,"%s", $s);
    $ss = str_split($s);
    echo count(array_unique($ss)) . "\n";
}
