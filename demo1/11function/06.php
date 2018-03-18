<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-16 13:26:45 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-16 13:44:25
 * @function: 可变参数列表
 */
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('prc');

function test($a, $b){
    echo func_num_args();
    print_r(func_num_args());
}

test(1, 2);

// 实现var-dump()函数

function var_dump2(){
    $len = func_num_args();
    
    if ($len <= 0){
        return;
    }

    foreach($params as $param){
        echo $params.'&&'.$param;
    }
}

var_dump2(1, 2, 3, 4);



