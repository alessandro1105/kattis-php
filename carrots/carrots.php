<?php

/*
    Problem: https://open.kattis.com/problems/carrots
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // We are only interested into the numeber of solved problem
    $P = $arr[1];

    echo $P;