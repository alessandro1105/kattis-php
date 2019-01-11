<?php

/*
    Problem: https://open.kattis.com/problems/babybites
*/

    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d", $str);
    fscanf($stdin, "%[^\n]", $str);

    $arr = explode(' ', $str);

    $count;

    foreach($arr as $number) {
        $count++;

        if ($number != 'mumble') {
            if (intval($number) !=  $count) {
                echo "something is fishy";
                exit;
            }
        }
    }

    echo "makes sense";