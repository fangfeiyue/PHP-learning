<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-16 13:26:45 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-16 13:29:23
 * @function: 函数默认值
 */
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('prc');

function defaultParams($a = 1, $b = 5){
    echo $a, $b;
}

defaultParams(1);





