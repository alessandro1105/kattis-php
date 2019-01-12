<?php

/*
    Problem: https://open.kattis.com/problems/twostones
*/

    // Read input
    $stdin = fopen("php://stdin", "r");
    fscanf($stdin, "%[^\n]", $arr);
    $arr = array_map("intval", explode(' ', $arr));

    $N = $arr[0];

    echo ($N % 2 == 0 ? 'Bob' : 'Alice');