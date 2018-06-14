<?php
header('content-type:text/html;charset=utf-8');

class MyClass {
    public static $a = 'static';
    public $b = '123';
    public static function func1 () {
        echo '静态方法调用'.self::$a;
    }
}

echo MyClass::$a;
MyClass::func1();
echo MyClass::$b; // 非静态调用失败