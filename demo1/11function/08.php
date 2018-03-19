<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-18 14:33:21 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-18 14:44:16
 * @Function: 可变函数
 */
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('prc');

function test($param){
    echo $param;
}

$fun = 'test';

$fun('hello world');


if (function_exists($fun)){
    $fun('exists');
}

if (is_callable($fun)){
    $fun('callabel');
}