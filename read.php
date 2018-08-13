<?php
/**
 * Created by PhpStorm.
 * User: 15736
 * Date: 2018/8/13
 * Time: 10:18
 */
function myShuffle($arr) {
    $t = count($arr);

    for($i = 0; $i < $t; $i++) {
        $n = rand(0, $t-1);
        $tmp = $arr[$i];
        $arr[$i] = $arr[$n];
        $arr[$n] = $tmp;
    }

    return $arr;
}

//print_r(myShuffle([1,2,3,4,5]));

function randArr($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i ++){
        $rand       = rand(0, $count);
        $tmp        = $arr[$i];
        $arr[$i]    = $rand;
        $arr[$rand] = $tmp;
    }
}
$arr = [1,2,3,4,5];
shuffle($arr);
print_r($arr);