<?php
class BubbleSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            $temp = 0;
            for ($i = count($arr) - 1; $i > 0; --$i) {
                for ($j = 0; $j < $i; ++$j) {
                    if ($arr[$j + 1] < $arr[$j]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
        }
        return $arr;
    }
}
?>