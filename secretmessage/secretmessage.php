<?php

/*
    Problem: https://open.kattis.com/problems/secretmessage
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // Numer of messages
    $N = $arr[0];

    for ($i = 0; $i < $N; $i++) {
        fscanf($stdin, "%[^\n]", $message);

        // get K
        $K = ceil(sqrt(strlen($message)));

        $matrix = [];

        //Create the matrix
        $index = 0;
        for ($j = 0; $j < $K; $j++) {
            $row = [];

            for ($x = 0; $x < $K; $x++) {
                if ($index < strlen($message)) {
                    $row[$x] = $message[$index++];
                } else {
                    $row[$x] = '*';
                }
            }

            $matrix[$j] = $row;
        }

        // Print the message
        for ($j = 0; $j < $K; $j++) {
            for ($x = $K-1; $x >= 0; $x--) {
                if ($matrix[$x][$j] == '*') {
                    continue;
                }

                echo $matrix[$x][$j];
            }
        }
        echo "\n";
    }