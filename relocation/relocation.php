<?php

/*
    Problem: https://open.kattis.com/problems/relocation
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $N = $arr[0];
    $Q = $arr[1];

    fscanf($stdin, "%[^\n]", $arr);
    $locations = array_map("intval", explode(' ', $arr));

    $out = [];

    for ($i = 0; $i < $Q; $i++) {
        fscanf($stdin, "%[^\n]", $arr);
        $arr = array_map("intval", explode(' ', $arr));

        $type = $arr[0];
        $input1 = $arr[1];
        $input2 = $arr[2];

        if ($type == 1) {
            $locations[$input1 -1] = $input2;
        } else {
            $out[] = abs($locations[$input1 -1] - $locations[$input2 -1]);
        }
    }

    for ($i = 0; $i < count($out); $i++) {
        echo $out[$i] . "\n";
    }