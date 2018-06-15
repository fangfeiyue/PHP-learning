<?php
header('content-type:text/html;charset=utf-8');
class MyClass {
    public static $a = 'abc';
    const num = 123;
}
echo MyClass::$a;
echo MyClass::num;