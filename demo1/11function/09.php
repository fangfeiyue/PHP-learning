<?php
// 函数嵌套
header('content-type:text/html;charset=utf-8');
stream_context_get_default();

function foo(){
    $innerParam = '我是内部的参数';
    function bar(){
        echo 'hello world';
        echo $innerParam;
    }    
}

foo();bar();