<?php

/*
    Problem: https://open.kattis.com/problems/calculatingdartscores
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $score);
    $score = intval($score);

    // Precalculate the possible scores with a single dart
    $scores = [];
    for ($i = 1; $i < 21; $i++) {
        $scores['single ' . $i] = $i;
        $scores['double ' . $i] = 2 * $i;
        $scores['triple ' . $i] = 3 * $i;
    }

    // Check if it's possibile to make the score with a single dart
    foreach ($scores as $key => $dart) {
        if ($dart == $score) {
            echo $key;
            exit;
        }
    }

    // Check if it's possibile to make the score with two darts
    foreach ($scores as $key1 => $dart1) {
        foreach ($scores as $key2 => $dart2) {
            if (($dart1 + $dart2) == $score) {
                echo $key1 . "\n";
                echo $key2 . "\n";
                exit;
            }
        }
    }

    // Check if it's possibile to make the score with two darts
    foreach ($scores as $key1 => $dart1) {
        foreach ($scores as $key2 => $dart2) {
            foreach ($scores as $key3 => $dart3) {
                if (($dart1 + $dart2 + $dart3) == $score) {
                    echo $key1 . "\n";
                    echo $key2 . "\n";
                    echo $key3 . "\n";
                    exit;
                }
            }
        }
    }

    // It's impossibile
    echo "impossible";

