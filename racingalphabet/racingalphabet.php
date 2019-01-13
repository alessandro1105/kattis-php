<?php

/*
    Problem: https://open.kattis.com/problems/racingalphabet
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // Characters used
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ '";

    // Sector length
    $time_per_sector = pi() * 60 / 15 / 28;

    // Numeber of aphorisms
    $N = $arr[0];

    for ($i = 0; $i < $N; $i++) {
        fscanf($stdin, "%[^\n]", $aphorism);

        // Position of the player
        $current = strpos($characters, $aphorism[0]) +1;
        $time = 1; // First letter taken

        for ($j = 1; $j < strlen($aphorism); $j++) {
            // Position of the next letter
            $next = strpos($characters, $aphorism[$j]) +1;

            // Sectors passed
            $sectors = abs($current - $next);
            $sectors = ($sectors < 28 - $sectors) ? $sectors : 28 - $sectors;

            // Time to get to the next letter + 1 second to take the letter
            $time += $sectors * $time_per_sector + 1;

            // Update current positon
            $current = $next;
        }

        // Print the time
        echo $time . "\n";

    }