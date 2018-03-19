<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-16 11:29:51 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-16 13:22:00
 * @Function: 函数中的变量
 */
date_default_timezone_set('PRC');
header('content-type:text/html;charset=utf-8');

$b = 123;

function localParam(){
    $a = 123;
    echo $b;
}

localParam();

echo $a;

// 局部静态变量

function testLocalParam(){
    static $bb = 3333;
    echo $bb;
}

testLocalParam();
echo $bb;

$aa = 1;
function globalParam(){
    global $aa;
    $aa = 5;
    echo '<br/>', $aa, '全局函数';
}

globalParam();
echo '<br/>', $aa;