<?php
// compoundType
header('content-type:text/html;charset=utf-8');
// 设置错误级别E_ALL但是除了NOTICE
error_reporting(E_ALL&~E_NOTICE);

// 数组
$arr = array();
var_dump($arr);

$arr = array(1, 'str', 1.23, true);
var_dump($arr);

// 对象
echo '<hr/>';
$obj = new StdClass();
var_dump($obj);

// 资源
echo '<hr/>';
$handle = fopen('./test.html', 'r');
var_dump($handle);

// 空
// 1.变量为声明直接使用 2.声明一个变量赋值为null 3.经过unset()注销过的变量
echo '<hr/>';
var_dump($hello);
echo $hello, 'null===<<<<';

echo '<hr/>';
$testNull = null;
var_dump($testNull);
echo $testNull;

echo '<hr/>';
$testNull = 12;
var_dump($testNull);
echo $testNull;

echo '<hr/>';
unset($testNull);
var_dump($testNull);
echo $testNull;

