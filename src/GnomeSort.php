<?php
class GnomeSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            $i = 0;
            $n = count($arr);
            while ($i < $n) {
                if ($i == 0 || $arr[$i-1] <= $arr[$i]) {
                    $i++;
                } else {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i-1];
                    $arr[--$i] = $tmp;
                }
            }
        }
        return $arr;
    }
}
?>