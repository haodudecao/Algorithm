冒泡排序

```
/**
 *jj 原创  date 190926
 */
function bubbleSort(array $nums): array
{
    for ($count = count($nums); $count > 1; $count--) {
        for ($i = 0; $i < $count - 1; $i++) {
            $nums[$i] > $nums[$i + 1] && list($nums[$i], $nums[$i + 1]) = [$nums[$i +1],$nums[$i]];
        }
    }
    return $nums;
}
/**
 *jj 原创  date 20200307
 */
function bubble_sort($nums) 
{
    $count = count($num) - 1;
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i; $j++) {
            $nums[$j] > $nums[$j+1] && list($nums[$j],$nums[$j+1]) = $nums[$j+1],$nums[$j];
        }
    }
}
```
