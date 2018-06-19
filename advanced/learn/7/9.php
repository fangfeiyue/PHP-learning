<?php
function myLoader ($name) {
    echo $name;
    exit();
}

spl_autoload_register('myLoader', true, true);

// 导入空间 完全限定名称， 不要第一个\
// use A\B\C\MyClass;
// $obj = new MyClass;

// use A\B\C\MyClass, C\D\Test;
// $obj = new MyClass;
// $obj = new Test;

// 导入多个并起别名
use A\B\C\MyClass, C\D\Test as T;
$obj = new T;



