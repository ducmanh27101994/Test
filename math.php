<?php

function arr($arr, $n)
{
    $chunks = array_chunk($arr, $n);
    $arr = [];
    for ($i = 0; $i < count($chunks); $i++) {
        for ($j = 0; $j < count($chunks[0]); $j++) {
            array_push($arr, $chunks[$j][$i]);
        }
    }
    return $arr;

}

echo '<pre>';
print_r(arr([11, 2, 8, 10, 5, 99, 1, 8, 9], 3));
echo '</pre>';

function total($arr)
{

    sort($arr);
    $total = $arr[count($arr) - 1] + $arr[count($arr) - 2];

    return $total;

}

print_r(total([0, 100, -4, 8, 143, 5, 99, 100]));


function test3($arr)
{
    sort($arr);

    $arr1 = [];
    for ($i = 0; $i < count($arr); $i++) {
        $total = $arr[$i + 1] - $arr[$i];
        array_push($arr1, $total);
    }


    $min = $arr1[0];
    for ($i = 0; $i < count($arr1); $i++) {
        if ($min > $arr[$i] && $arr[$i]>0) {
            $min = $arr[$i];
        }
    }

    var_dump($min);
    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        $total = $arr[$i + 1] - $arr[$i];
        if ($total == $min) {
            array_push($result,[$arr[$i],$arr[$i+1]]);
        }
    }
    return $result;

}
echo '<pre>';
print_r(test3([1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15]));
echo '</pre>';