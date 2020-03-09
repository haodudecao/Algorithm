<?php
/**
 * bubbleSort 冒泡排序
 * @param array $nums 有序数组
 */
function bubbleSort (array $nums = [])
{
    $count = count($nums) - 1;
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            $nums[$i] > $nums[$i + 1] && list($nums[$i], $nums[$i + 1]) =  [$nums[$i+ 1], $nums[$i ]];
        }
    }
}
