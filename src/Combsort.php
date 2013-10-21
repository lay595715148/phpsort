<?php
class CombSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            $len = count($arr);
            $gap = $len;
            $swapped = true;
     
            while($gap > 1 || $swapped){
                if($gap > 1){
                    $gap = floor($gap/1.3); //获取排序间隔
                }
 
                $i = 0;
                $swapped = false;
                while($i + $gap < $len){
                    if($arr[$i] - $arr[$i + $gap] > 0){ //如果为正数,交换位置
                        $tmp = $arr[$i];
                        $arr[$i] = $arr[$i + $gap];
                        $arr[$i + $gap] = $tmp;
                        $swapped = true;
                    }
                    $i++;
                }
            }
        }
        return $arr;
    }
}
?>