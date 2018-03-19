<?php
/*
 * @Author: FangFeiyue 
 * @Date: 2018-03-16 13:26:45 
 * @Last Modified by: FangFeiyue
 * @Last Modified time: 2018-03-16 14:15:28
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
echo '<br/>';
function var_dump2(){
    $len = func_num_args();

    if ($len <= 0){
        return;
    }

    $params = func_get_args();

    foreach($params as $param){
        if (is_numeric($param)){
            echo 'int('.$param.')';
        }else if(is_string($param)){
            echo 'string('.strlen($param).')'.$param;
        }
    }
}

var_dump2(1, 2, 3, 4, 'fangfeiyue');



