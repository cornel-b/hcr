<?php
/*
https://www.hackerrank.com/contests/w29/challenges/big-sorting/problem
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$unsorted = array();

$arr = [];

class MyHeap extends SplMinHeap {
    public static $limit = 10;

    public function compare($value1, $value2) {
         
         if ($value1 == $value2) return 0;
         if (strlen($value1) > strlen($value2)) return -1;
         if (strlen($value1) < strlen($value2)) return 1;

         $min = min(strlen($value1), strlen($value2));
         for ($i=0; $i<$min; $i++) {
             if ($value1[$i] > $value2[$i]) return -1;
             if ($value1[$i] < $value2[$i]) return 1;
         }

         
         return 1;
    }

};

$heap = new MyHeap();
for ($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++) {
    fscanf($handle,"%s", $nr);
    $heap->insert($nr);
}

foreach( $heap as $number) { 
    echo $number . "\n";
} 