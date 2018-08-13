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

//print_r(BubbleSort([5,8,3,9,7]));

//快速排序
function QSort($arr){
    $length = count($arr);
    if($length <=1){
        return $arr;
    }
    $pivot = $arr[0];//枢轴
    $left_arr = array();
    $right_arr = array();
    for($i=1;$i<$length;$i++){//注意$i从1开始0是枢轴
        if($arr[$i]<=$pivot){
            $left_arr[] = $arr[$i];
        }else{
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = QSort($left_arr);//递归排序左半部分
    $right_arr = QSort($right_arr);//递归排序右半部份
    return array_merge($left_arr,array($pivot),$right_arr);//合并左半部分、枢轴、右半部分
}

print_r(QSort([8,5,3,9,7]));