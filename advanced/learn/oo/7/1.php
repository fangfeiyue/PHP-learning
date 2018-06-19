<?php
header('content-type:text/html;charset=utf-8');

// 冲突问题 以下代码将会报错

// function time () {
//     echo '不能声明系统函数';
// }

// time();

function test () {
    echo '调用test成功';
}

test();

function test () {
    echo '';
}

test();