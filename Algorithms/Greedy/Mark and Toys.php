<?php

/*
https://www.hackerrank.com/challenges/mark-and-toys/problem
*/

$line = (string)fgets(STDIN);
$line = trim($line);
$line = explode(' ', $line);
$toyCount = (int)$line[0];
$money = (int)$line[1];

$line = (string)fgets(STDIN);
$line = trim($line);
$prices = explode(' ', $line);
foreach ($prices as &$price) $price = (int)$price;

sort($prices);

$ctotal = 0;
$citems = 0;
foreach ($prices as $price) {

    if ($price + $ctotal > $money) {
        break;
    }

    $ctotal += $price;
    $citems++;

}

echo $citems;