<?php
// 汉罗塔问题
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function hlt($n){
    if ($n == 1){
        return 1;
    }

    return 2 * hlt($n - 1) + 1;
}

echo hlt(2);