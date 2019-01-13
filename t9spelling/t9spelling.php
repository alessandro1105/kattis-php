<?php

/*
    Problem: https://open.kattis.com/problems/t9spelling
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    // Numero of messages
    $N = $arr[0];

    // Prepare keypad
    $keypad = [
        0 => ' ',
        1 => '',
        2 => 'abc',
        3 => 'def',
        4 => 'ghi',
        5 => 'jkl',
        6 => 'mno',
        7 => 'pqrs',
        8 => 'tuv',
        9 => 'wxyz',
    ];


    // Process message by message
    for ($i = 0; $i < $N; $i++) {
        fscanf($stdin, "%[^\n]", $message);
    
        // output sequesce of character
        $output = '';

        // Process each line
        for ($j = 0; $j < strlen($message); $j++) {
            
            $sequence = '';
            
            for ($x = 0; $x < 10; $x++) {
                $pos = strpos($keypad[$x], $message[$j]);
                if ($pos !== false) {
                    $sequence = str_repeat($x, $pos +1);
                    break;
                }
            }

            // If the last pressed key is the same add the pause
            if ($output[strlen($output) -1] == $sequence[0]) {
                $output .= ' ';
            }

            $output .= $sequence;
        }

        echo "Case #" . ($i + 1) . ": " . $output . "\n";
    }