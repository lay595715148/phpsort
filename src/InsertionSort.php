<?php
class InsertionSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr)) {
            foreach($arr as $k=>$v){
                $i = $k-1;
                while($i > -1 && $v < $arr[$i]){
                    $next = $arr[$i+1];
                    $arr[$i+1] = $arr[$i];
                    $arr[$i] = $next;
                    $i--;
                }
            }
        }
        return $arr;
    }
}
?>