<?php

/*
    Problem: https://open.kattis.com/problems/speedlimit
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $n = $arr[0];

    // While there are input
    while ($n != -1) {

        $distance = 0;
        $time = 0;

        // Obtain the input and count
        for ($i = 0; $i < $n; $i++) {
            fscanf($stdin, "%[^\n]", $arr);
            $input = array_map("intval", explode(' ', $arr));

            // Calculate the distance
            $distance += $input[0] * ($input[1] - $time);
            $time = $input[1];
        }

        // Print miles
        echo $distance . " miles\n";

        // Lets read the next input and update n
        fscanf($stdin, "%[^\n]", $arr);
        $arr = array_map("intval", explode(' ', $arr));

        $n = $arr[0];
    }