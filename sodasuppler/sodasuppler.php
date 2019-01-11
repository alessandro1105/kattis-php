<?php

/*
    https://open.kattis.com/problems/sodasurpler
*/

// Read input
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%[^\n]", $arr);
$arr = array_map("intval", explode(' ', $arr));

// Sum bottles
$n = $arr[0] + $arr[1];
$cost = $arr[2];

$result = 0;
while ($n >= $cost) {
    $bottles = floor($n / $cost);
    $n = $n - $bottles * $cost + $bottles;

    // Update results
    $result += $bottles;
}

echo $result;