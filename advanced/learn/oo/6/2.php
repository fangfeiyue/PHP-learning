<?php
header('content-type:text/html;charset=utf-8');

function myLoad ($a) {
    var_dump($a);
    include './class_b/'.$a.'.class.php';
}

/**
 * 参数一：需要注册的自动装载函数
 * 参数二：如果没有找到参数一的函数，是否抛出异常错误
 * 参数三：是否把参数一的函数添加到队列之首
 */
spl_autoload_register('myLoad', true, true);
class A extends B {

}