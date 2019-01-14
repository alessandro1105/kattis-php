<?php

/*
    Problem: https://open.kattis.com/problems/acm
*/

    $stdin = fopen("php://stdin", "r");
    
    // Take the first submission
    fscanf($stdin, "%[^\n]", $arr);
    $submission = explode(' ', $arr);

    // Problems
    $wrong = [];
    $right = 0;
    $time = 0;

    while (intval($submission[0]) > 0) {

        if ($submission[2] == 'right') {
            // Get the numer of tries before getting the solution right
            $tries = isset($wrong[$submission[1]]) ? $wrong[$submission[1]] : 0;

            // Update time
            $time += intval($submission[0]) + $tries * 20;

            // Update solved problems
            $right++;
        
        } else {
            if (isset($wrong[$submission[1]])) {
                $wrong[$submission[1]]++;
            } else {
                $wrong[$submission[1]] = 1;
            }
        }

        // Read the next submission
        fscanf($stdin, "%[^\n]", $arr);
        $submission = explode(' ', $arr);
    }
    
    echo $right . ' ' . $time;