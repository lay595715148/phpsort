<?php
require_once '../laybug/laybug.php';
Debugger::initialize(array(true, false));

function __autoload($classname) {
    require_once './src/'.$classname.'.php';
}

global $num, $arr, $min, $max;
//$arr = array(92,82,16,892,17,84,23,192,8923,1782,91,7,29,24,83,942,102,93,845,923,763,90,1,8234,56,873,529,4783,263,875,912,874,8936,820);
$arr = array();
$min = 1;
$max = 150;
for($i = $min; $i < $max; $i++) {
    $arr[] = $i;
}
shuffle($arr);

Debugger::debug($arr);
/*Debugger::debug('QuickSort: 0');
$ret = QuickSort::sort($arr);
Debugger::debug('QuickSort: 1');
Debugger::debug('QuickSort: 00');
$ret = BubbleSort::sort($arr);
Debugger::debug('QuickSort: 11');
Debugger::debug('QuickSort: 000');
$ret = CocktailShakerSort::sort($arr);
Debugger::debug('QuickSort: 111');
Debugger::debug('QuickSort: 0000');
$ret = GnomeSort::sort($arr);
Debugger::debug('QuickSort: 1111');
Debugger::debug('QuickSort: 00000');
$ret = StoogeSort::sort($arr);
Debugger::debug('QuickSort: 11111');
Debugger::debug('QuickSort: 000000');
$ret = SelectionSort::sort($arr);
Debugger::debug('QuickSort: 111111');
Debugger::debug('QuickSort: 0000000');
$ret = InsertionSort::sort($arr);
Debugger::debug('QuickSort: 1111111');*/
Debugger::debug('QuickSort: 00000000');
$ret = CountingSort::sort($arr);
Debugger::debug('QuickSort: 11111111');
Debugger::debug($ret);
?>