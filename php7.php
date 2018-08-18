<?php
/**
 * Created by PhpStorm.
 * User: 15736
 * Date: 2018/8/18
 * Time: 17:15
 */

/**
 * zval使用栈内存
 * 在zend引擎和扩展中，经常要创建一个PHP的变量，底层就是一个zval指针。之前版本是通过MAKE_STD_ZVAL动态的从堆上分配一个zval内存
 * PHP7可以直接使用栈内存
 */

//php5
//zval *val;MAKE_STD_ZVAL(val)
//php7:好处：节省了一次内存分配
//zval val;