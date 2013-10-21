<?php
class QuickSort {
    public static function sort($seq = array()) {
        if(is_array($seq) && !empty($seq) && count($arr) > 1) {
            if (count($seq) > 1) {
                $k = $seq[0];
                $x = array();
                $y = array();
                $_size = count($seq);//do not use count($seq) in loop for.
                for ($i = 1;$i < $_size;$i++) {
                  if ($seq[$i] <= $k) {
                    $x[] = $seq[$i];
                  } else {
                    $y[] = $seq[$i];
                  }
                }
                $x = QuickSort::sort($x);
                $y = QuickSort::sort($y);
                return array_merge($x, array($k), $y);
            } else {
                return $seq;
            }
        }
        return $seq;
    }
}
?>