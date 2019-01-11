<?php

/*
    Problem: https://open.kattis.com/problems/spavanac
*/

    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%[^\n]", $str);

    $arr = explode(' ', $str);

    $time = 60*$arr[0] + $arr[1];

    if ($time < 45) {
        $time = 24*60 + $time - 45;
    } else {
        $time -= 45;
    }

    $h = floor($time / 60);
    $m = $time - $h*60;

    echo $h . ' ' . $m;

