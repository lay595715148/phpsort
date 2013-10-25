<?php
/**
 * 得到的是索引打乱着的，根据索引排列后的值是排序正确的
 */
class CountingSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            return CountingSort::counting($arr);
        }
        return $arr;
    }
 
    private static function counting($A, $B = array(),$k = 100) {
        $C = array();
        // 计数
        for ($j = 0; $j < count($A); $j++) {
            $a = $A[$j];
            $C[$a] += 1;
        }
        // 求计数和
        for ($i = 1; $i < $k; $i++) {
            $C[$i] = $C[$i] + $C[$i - 1];
        }
        // 整理
        for ($j = count($A) - 1; $j >= 0; $j--) {
            $a = $A[$j];
            $B[$C[$a] - 1] = $a;
            $C[$a] -= 1;
        }
        //ksort($B);
        return $B;
    }
}
?>