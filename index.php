<?php
 
$arr = array(7, 3, 9, 6, 5, 1, 2, 0, 8, 4);
$sortedArr = selectionSort($arr);
var_dump($sortedArr);
 
function selectionSort(array $arr) {
    for ($i = 0; $i < count($arr); ++$i) {
        $min = null;
        $minKey = null;
        for($j = $i; $j < count($arr); ++$j) {
            if (null === $min || $arr[$j] < $min) {
                $minKey = $j;
                $min = $arr[$j];
            }
        }
        $arr[$minKey] = $arr[$i];
        $arr[$i] = $min;
    }
    return $arr;
}
