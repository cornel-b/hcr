<?php
/*
https://www.hackerrank.com/challenges/marcs-cakewalk/problem
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$calories_temp = fgets($handle);
$calories = explode(" ",$calories_temp);
array_walk($calories,'intval');

rsort($calories);
$nr = 0;
for ($i=0; $i<count($calories); $i++) {
    $nr += $calories[$i] * pow(2, $i);
}
echo $nr;