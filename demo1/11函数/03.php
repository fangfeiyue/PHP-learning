<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-16 11:19:17 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-16 11:22:08
 * @Function: 函数参数
 */
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');

function getSum($x, $y){
    $sum = 0;

    for ($i = $x; $i <= $y; $i++){
        $sum += $i;
    }

    return $sum;
} 

echo getSum(1, 100);