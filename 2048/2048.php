<?php

/*
    Problem: https://open.kattis.com/problems/2048
*/

    // Read input
    $stdin = fopen("php://stdin", "r");

    // Declare board array to contain the numbers
    $board = [];

    // Read 4 line
    for ($i = 0; $i < 4; $i++) {
        fscanf($stdin, "%[^\n]", $arr);
        $board[] = array_map("intval", explode(' ', $arr));
    }
    
    // Read move
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $move = $arr[0];

    // Left
    if ($move == 0) {

        for ($n = 0; $n < 4; $n++) { // Row index
            for ($i = 0; $i < 4; $i++) { // Column index
                // If current is 0 continue
                if ($board[$n][$i] == 0) {
                    continue;
                }

                // Serach if there is a consecutive values equals to $current
                for ($j = $i+1; $j < 4; $j++) {
                    // If 0 continue
                    if ($board[$n][$j] == 0) {
                        continue;

                    // If the number is equal to $current 
                    } else if ($board[$n][$j] == $board[$n][$i]) {
                        $board[$n][$i] = 2 * $board[$n][$i]; // Update the value
                        $board[$n][$j] = 0; // Update this cell
                        break;

                    } else {
                        break;
                    }
                }

                // Search the first free cell
                for ($j = 0; $j < $i; $j++) {
                    if ($board[$n][$j] == 0) {
                        // Move
                        $board[$n][$j] = $board[$n][$i];
                        $board[$n][$i] = 0;
                        break;
                    }
                }
            }
        }
    
    // Up
    } else if ($move == 1) {

        for ($n = 0; $n < 4; $n++) { // Row index
            for ($i = 0; $i < 4; $i++) { // Column index
                // If current is 0 continue
                if ($board[$i][$n] == 0) {
                    continue;
                }

                // Serach if there is a consecutive values equals to $current
                for ($j = $i+1; $j < 4; $j++) {
                    // If 0 continue
                    if ($board[$j][$n] == 0) {
                        continue;

                    // If the number is equal to $current 
                    } else if ($board[$j][$n] == $board[$i][$n]) {
                        $board[$i][$n] = 2 * $board[$i][$n]; // Update the value
                        $board[$j][$n] = 0; // Update this cell
                        break;

                    } else {
                        break;
                    }
                }

                // Search the first free cell
                for ($j = 0; $j < $i; $j++) {
                    if ($board[$j][$n] == 0) {
                        // Move
                        $board[$j][$n] = $board[$i][$n];
                        $board[$i][$n] = 0;
                        break;
                    }
                }
            }
        }
    
    // Right
    } else if ($move == 2) {

        for ($n = 0; $n < 4; $n++) { // Row index
            for ($i = 3; $i >= 0; $i--) { // Column index
                // If current is 0 continue
                if ($board[$n][$i] == 0) {
                    continue;
                }

                // Serach if there is a consecutive values equals to $current
                for ($j = $i-1; $j >= 0; $j--) {
                    // If 0 continue
                    if ($board[$n][$j] == 0) {
                        continue;

                    // If the number is equal to $current 
                    } else if ($board[$n][$j] == $board[$n][$i]) {
                        $board[$n][$i] = 2 * $board[$n][$i]; // Update the value
                        $board[$n][$j] = 0; // Update this cell
                        break;

                    } else {
                        break;
                    }
                }

                // Search the first free cell
                for ($j = 3; $j > $i; $j--) {
                    if ($board[$n][$j] == 0) {
                        // Move
                        $board[$n][$j] = $board[$n][$i];
                        $board[$n][$i] = 0;
                        break;
                    }
                }
            }
        }
    // Down
    } else {

        for ($n = 0; $n < 4; $n++) { // Row index
            for ($i = 3; $i >= 0; $i--) { // Column index
                // If current is 0 continue
                if ($board[$i][$n] == 0) {
                    continue;
                }

                // Serach if there is a consecutive values equals to $current
                for ($j = $i-1; $j >= 0; $j--) {
                    // If 0 continue
                    if ($board[$j][$n] == 0) {
                        continue;

                    // If the number is equal to $current 
                    } else if ($board[$j][$n] == $board[$i][$n]) {
                        $board[$i][$n] = 2 * $board[$i][$n]; // Update the value
                        $board[$j][$n] = 0; // Update this cell
                        break;

                    } else {
                        break;
                    }
                }

                // Search the first free cell
                for ($j = 3; $j > $i; $j--) {
                    if ($board[$j][$n] == 0) {
                        // Move
                        $board[$j][$n] = $board[$i][$n];
                        $board[$i][$n] = 0;
                        break;
                    }
                }
            }
        }
    }

    // Print the new board
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo $board[$i][$j];
            
            if ($j != 3) {
                echo ' ';
            }
        }
        echo "\n";
    }