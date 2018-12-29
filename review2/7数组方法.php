<?php
header("content-type:text/html;charset=utf-8");

# 创建一个数组
$array = array('f', 'g');

# 添加内容到数组中
array_push($array, 123, 323);
print_r($array);

array_unshift($array, 'ddd');
print_r($array);

# 删除内容
array_pop($array); // 弹出数组最后一个元素
print_r($array);
array_shift($array); // 将数组中开头的单元移除数组
print_r($array);

# 数组排序
$array = [1, 2, 4, 56, 3, 123];
sort($array);
print_r($array);

$array = ['a', 'b', 213, 54];
sort($array);
print_r($array);

# 将数组转化为字符串
$array = array("hello", "world");
print_r(implode($array));

# 将字符串转化为数组
$str = 'helloworld';
print_r(explode("o", $str));


