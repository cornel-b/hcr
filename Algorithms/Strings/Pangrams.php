<?php
 
/*
https://www.hackerrank.com/challenges/pangrams/problem
*/   
function panagram($string) 
{
    if (strlen($string) < 26) return false;
    $chars = [];
    for ($letter = 'a'; $letter <= 'z'; $letter++) {
        $chars[] = $letter;
    }

    $used = [];
    $string = strtolower($string);
    for ($i=0; $i<strlen($string); $i++) {
        $letter = $string[$i];
        if (in_array($letter, $chars) && !in_array($letter, $used)) {
            $used[] = $letter;
        }
    }
    
    return (count($used) == 26);
}
    
    
while($f = fgets(STDIN)) {
    $res = panagram($f);
    if ($res) {
        echo "pangram";
    } else {
        echo "not pangram";
    }
}