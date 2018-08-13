<?php
/**
 * Created by PhpStorm.
 * User: 15736
 * Date: 2018/8/13
 * Time: 10:18
 */
//栈
$arr = [1,2,3];
$array = [];
foreach ($arr as $k => $v){
//    if ($k > 1) break;
    array_push($array, $v);
}
array_pop($array);
array_pop($array);

//print_r($array);

//队列
$array_other = [];
foreach ($arr as $k => $v){
    array_push($array_other, $v);
}

array_shift($array_other);
//print_r($array_other);

//冒泡
function BubbleSort($arr){
    $length = count($arr);
    if($length<=1) return $arr;

    for($i=0;$i<$length;$i++){
        for($j=$length-1;$j>$i;$j--){
//            echo $arr[$j];die;
            if($arr[$j]<$arr[$j-1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $tmp;
            }
        }
    }
    return $arr;
}

print_r(BubbleSort([5,8,3,9,7]));
