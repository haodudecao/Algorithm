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
```
