<?php
/**
 * 选择排序(Selection sort)是一种简单直观的排序算法。它的工作原理如下。
 * 首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置，然后，再从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾。
 * 以此类推，直到所有元素均排序完毕。
 * 选择排序的主要优点与数据移动有关。
 * 如果某个元素位于正确的最终位置上，则它不会被移动。
 * 选择排序每次交换一对元素，它们当中至少有一个将被移到其最终位置上，因此对n个元素的表进行排序总共进行至多n-1次交换。
 * 在所有的完全依靠交换去移动元素的排序方法中，选择排序属于非常好的一种。
 */
class SelectionSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr)) {
            $min = 0;
            for ($i = 0; $i < count($arr); $i++) {
                //假定第一个元素为最小元素
                $min = $i;
                //循环遍历元素，每遍历一个元素，与当前最小元素比较，若此元素比当前最小元素小，则将此元素置为最小元素
                for ($j = $i + 1; $j < count($arr); $j++) {
                    if($arr[$j] < $arr[$min]) {
                        $min = $j;
                    }
                }
                //遍历一遍，找到一个最小元素，把此最小元素放在数组的第一个位置
                if ($min != $i) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$min];
                    $arr[$min] = $temp;
                }
            }
        }
        return $arr;
    }
}
?>