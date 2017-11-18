<?php

/*
https://www.hackerrank.com/challenges/correctness-invariant/problem
*/

function insertionSort(&$arr){
   for($i=1;$i<count($arr);$i++){
      $val = $arr[$i];
      $j = $i;
      while($j>0 && $arr[$j-1] > $val){
         $arr[$j] = $arr[$j-1];
         $j--;
      }
      $arr[$j] = $val;
   }
}
 
$handle = fopen ("php://stdin","r");
$t = fgets($handle);
$arr = explode(' ', fgets($handle));

insertionSort($arr);
echo implode(' ', $arr);
foreach($arr as $value) {
  print $value." ";
}