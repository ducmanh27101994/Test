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