<?php
// 匿名函数
date_default_timezone_set();
header('content-type:text/html;charset=utf-8');

// $message = 'hello world';

// $say = function() use ($message){
//     echo $message;
// };

// $say();

$innerFunction = function(){
    $message = '函数内部';
    $say = function() use ($message) {
        echo $message;
    };
    return $say;
};

$fun = $innerFunction();

$fun();