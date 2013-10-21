<?php
class HeapSort {
    public static function sort($arr = array()) {
        if(is_array($arr) && !empty($arr)) {
            HeapSort::buildMaxHeapify($arr);
            HeapSort::heap($arr);
        }
        return $arr;
    }
    private static function heap(&$data) {
        //末尾与头交换，交换后调整最大堆
        for ($i = count($data) - 1; $i > 0; $i--) {
            $temp = $data[0];
            $data[0] = $data[$i];
            $data[$i] = $temp;
            heapSort::maxHeapify($data, $i, 0);
        }
    }
    private static function buildMaxHeapify(&$data){
        //没有子节点的才需要创建最大堆，从最后一个的父节点开始
        $startIndex = (count($data) - 1 - 1) >> 1;// getParentIndex(count($data) - 1);
        //从尾端开始创建最大堆，每次都是正确的堆
        for ($i = $startIndex; $i >= 0; $i--) {
            HeapSort::maxHeapify($data, count($data), $i);
        }
    }

    /**
     * 创建最大堆
     * @param data
     * @param heapSize 需要创建最大堆的大小，一般在sort的时候用到，因为最多值放在末尾，末尾就不再归入最大堆了
     * @param index 当前需要创建最大堆的位置
     */
    private static function maxHeapify(&$data, $heapSize, $index){
        // 当前点与左右子节点比较
        $left = ($index << 1) + 1;
        $right = ($index << 1) + 2;

        $largest = $index;
        if($left < $heapSize && $data[$index] < $data[$left]) {
            $largest = $left;
        }
        if($right < $heapSize && $data[$largest] < $data[$right]) {
            $largest = $right;
        }
        //得到最大值后可能需要交换，如果交换了，其子节点可能就不是最大堆了，需要重新调整
        if (largest != index) {
            $temp = $data[$index];
            $data[$index] = $data[$largest];
            $data[$largest] = $temp;
            HeapSort::maxHeapify($data, $heapSize, $largest);
        }
    }

    /**
     * 父节点位置
     * @param current
     * @return
     */
    private static function getParentIndex($current){
        return ($current - 1) >> 1;
    }

    /**
     * 左子节点position 注意括号，加法优先级更高
     * @param current
     * @return
     */
    private static function getChildLeftIndex($current){
        return ($current << 1) + 1;
    }

    /**
     * 右子节点position
     * @param current
     * @return
     */
    private static function getChildRightIndex($current){
        return ($current << 1) + 2;
    }

    /**
     * 以2为底的对数
     * @param param
     * @return
     */
    private static function getLog($param){
        return doubleval(log($param)/log(2));
    }
}
?>