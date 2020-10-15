<?php

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