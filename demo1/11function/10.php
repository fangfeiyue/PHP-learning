<?php
// 递归调用
date_default_timezone_set('prc');
header('content-type:text/html;charset:utf-8');

function sum($m, $n){
    if ($n <= $m){
        return $m;
    }

    return sum($m, $n -1 ) + $n;
}

echo sum(1, 100);

// sum(1, 100)=> sum(1, 99)+100=>sum(1, 98)+99=>sum(1, 97)+98=>...sum(1, 1)

// 1, 1, 2, 3, 5, 8, 13...

function fbnq($n){
    if ($n <= 2){
        return 1;
    }
    return fbnq($n - 1) + fbnq($n - 2);
}

echo '<br/>', fbnq(6);