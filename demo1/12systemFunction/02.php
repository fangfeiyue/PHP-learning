<?php
// 数学函数
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

// 进一取整
echo floor(3.5),'<br/>'; //3



// 舍一取整
echo ceil(3.2), '<br/>'; //4



// 幂运算
echo pow(2, 3),'<br/>';


// 平方根
echo sqrt(3),'<br/>';
 


// 最大值，最小值
$arr = [1, 2, 3, 4, 5];
echo max($arr), min($arr), '<br/>';



// 取随机数
echo rand(1, 3), '<br/>';
echo mt_rand(1000, 9999), '<br/>';




// 四舍五入
echo round(1.522345),'<br/>'; //2
echo round(1.2234, 2),'<br/>'; //1.22
echo round(1.22222), '<br/>'; //1




// 数字格式化
echo number_format(75231.45),'<br/>'; //75,231
echo number_format(75231.45, 1),'<br/>'; //75,231.5




// 浮点数余数
echo '浮点数余数', fmod(7.8, 3), '<br/>';





