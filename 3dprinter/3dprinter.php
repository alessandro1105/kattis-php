<?php

/*
    Problem: https://open.kattis.com/problems/3dprinter
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // N days
    $n = $arr[0];

    // N printers
    $printers = 1;
    // N Days
    $days = 0;

    while ($printers < $n) {
        $days++;
        $printers = pow(2, $days);
    }

    // Print the statues
    $days++;

    echo $days; // Add 1 day to print the statues