<?php

/*
    Problem: https://open.kattis.com/problems/sibice
*/

    // Read input
    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // Numer of matches
    $N = $arr[0];
    // Width
    $W = $arr[1];
    // Height
    $H = $arr[2];

    $diagonal = sqrt(pow($W, 2) + pow($H, 2));

    for ($i = 0; $i < $N; $i++) {
        fscanf($stdin, "%[^\n]", $arr);
        $arr = array_map("intval", explode(' ', $arr));

        // Match dimension
        $match = $arr[0];

        if ($match <= $diagonal) {
            echo "DA\n";
        } else {
            echo "NE\n";
        }
    }
