<?php
/*
https://www.hackerrank.com/challenges/gem-stones/problem
*/
function getGemCount($strings) {

    $occurencies = [];
    foreach ($strings as $string) {

        $array = str_split($string);
        $array = array_unique($array);

        foreach ($array as $letter) {
            if (!isset($occurencies[$letter])) {
                $occurencies[$letter] = 0;
            }
            $occurencies[$letter]++;
        }
    }

    $nr = 0;
    foreach ($occurencies as $letter => $nroc) {
        if ($nroc == count($strings)) {
            $nr++;
        }
    }

    return $nr;
}

$strings = [];
$nr = (int)fgets(STDIN);
for ($i=1; $i<=$nr; $i++) {
    $str = (string)fgets(STDIN);
    $str = trim($str);
    $strings[] = $str;
}

echo getGemCount($strings);