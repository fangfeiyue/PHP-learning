<?php
// PHP5.6开始允许导入函数或常量或者为它们设置别名

include "./8_1.php";

// 导入函数
use function A\S\D\func;
func();

// 导入常量
use const A\S\D\NUM;
echo NUM;

// 起别名
use function A\S\D\func as xx;
xx();

// 不能连在一起导入多个
use function A\S\D\func as xx, const A\S\D\NUM;

