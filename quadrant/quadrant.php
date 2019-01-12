<?php

/*
    Problem: https://open.kattis.com/problems/quadrant
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $x = $arr[0];

    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $y = $arr[0];

    if ($x > 0) {
        if ($y > 0) {
            echo '1';
        } else {
            echo '4';
        }
    } else {
        if ($y > 0) {
            echo '2';
        } else {
            echo '3';
        }
    }