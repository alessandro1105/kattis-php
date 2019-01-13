<?php

/*
    Problem: https://open.kattis.com/problems/timeloop
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // Numer of chant
    $N = $arr[0];

    for ($i = 0; $i < $N; $i++) {
        echo ($i + 1) . " Abracadabra\n";
    }