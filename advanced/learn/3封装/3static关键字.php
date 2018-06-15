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
// echo MyClass::$b; // 非静态调用失败

$mc = new MyClass;
// echo $mc->a; // 对象使用->去调用静态属性 失败
echo $mc->b; // 123



// 静态方法当中调用静态方法

class Test {
    public static $name = 'fang';

    public static function getName () {
        echo '<br/>'.self::$name;
    }
    public static function getEcho () {
        self::getName();
    }
}

$test = new Test;
$test->getEcho();
Test::getEcho();