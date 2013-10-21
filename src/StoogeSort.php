<?php
/**
 * Stooge 排序是一种低效的递归排序算法，甚至慢于冒泡排序。
 * 在《算法导论》第二版第7章（快速排序）的思考题中被提到，是由Howard、Fine等教授提出的所谓“漂亮的”排序算法。
 */
class StoogeSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            StoogeSort::stooge($arr, 0, count($arr) - 1);
        }
        return $arr;
    }
    private static function stooge(&$arr, $i = 0, $j = 0) {
        if($arr[$i] > $arr[$j]) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
        
        if($i + 1 >= $j) {
            return;
        }

        $t = floor(($j - $i + 1) / 3);
        StoogeSort::stooge($arr, $i, $j - $t);
        StoogeSort::stooge($arr, $i + $t, $j);
        StoogeSort::stooge($arr, $i, $j - $t);
    }
}
?>