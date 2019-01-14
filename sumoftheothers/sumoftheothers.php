<?php

/*
    Problem: https://open.kattis.com/problems/sumoftheothers
*/

    $stdin = fopen("php://stdin", "r");

    // Read the first sum
    fscanf($stdin, "%[^\n]", $input);

    // Old input
    $old_input = '';

    // While inputs are different 
    while ($input != $old_input) {
        // Save current input as last input seen
        $old_input = $input;

        // Prepare the sum values
        $sum = array_map("intval", explode(' ', $input));

        for ($i = 0; $i < count($sum); $i++) {
            $total = 0;
            for ($j = 0; $j < count($sum); $j++) {
                if ($i == $j) {
                    continue;
                }
                $total += $sum[$j];
            }

            if ($total == $sum[$i]) {
                echo $sum[$i] . "\n";
                break;
            }
        }

        // Read the next input
        fscanf($stdin, "%[^\n]", $input);
    }   