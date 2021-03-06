<?php
/**
 * 二分查找/折半查找
 * $arr  有序数组 从小到大
 * $needle  目标值
 */

function binary_search(array $arr = [], $needle)
{
    $num = count($arr);
    $start = 0;
    $end = $num -1;
    while($start <= $end) {
        $midNum = intval(($end + $start) / 2);
        if ($arr[$midNum] == $needle) {
            return $midNum;
        } else {
            if ($arr[$midNum] > $needle) {
                $end = $midNum - 1;
            } else {
                $start = $midNum+ 1;
            }
        }
    }
}
