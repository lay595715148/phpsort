<?php
class CocktailShakerSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr) && count($arr) > 1) {
            $bottom = 0;
            $top = count($arr) - 1;
            $swapped = true; 
            while($swapped == true) {// if no elements have been swapped, then the list is sorted
                $swapped = false; 
                for($i = $bottom; $i < $top; $i = $i + 1) {
                    if($arr[$i] > $arr[$i + 1]) {// test whether the two elements are in the correct order
                        //swap($arr[i], $arr[$i + 1]); // let the two elements change places
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$i + 1];
                        $arr[$i + 1] = $temp;
                        $swapped = true;
                    }
                }
                // decreases top the because the element with the largest value in the unsorted
                // part of the list is now on the position top 
                $top = $top - 1; 
                for($i = $top; $i > $bottom; $i = $i - 1) {
                    if($arr[$i] < $arr[$i - 1])  {
                        //swap($arr[$i], $arr[$i - 1]);
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$i - 1];
                        $arr[$i - 1] = $temp;
                        $swapped = true;
                    }
                }
                // increases bottom because the element with the smallest value in the unsorted 
                // part of the list is now on the position bottom 
                $bottom = $bottom + 1;  
            }
        }
        return $arr;
    }
}
?>