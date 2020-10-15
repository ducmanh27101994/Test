<?php

function total($arr)
{

    sort($arr);
    $total = $arr[count($arr) - 1] + $arr[count($arr) - 2];

    return $total;

}

print_r(total([0, 100, -4, 8, 143, 5, 99, 100]));
