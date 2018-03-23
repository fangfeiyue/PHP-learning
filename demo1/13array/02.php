<?php
// 常用数组函数解析
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

// 1.求字符串中字母的和
$str = "3,4,5,65,2,4,4444";
$arr = explode(',', $str);
print_r($arr);
echo array_sum($arr);






