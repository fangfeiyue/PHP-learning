<?php
header('content-type:text/html;charset=utf-8');

class MyClass {
    private function func ($n) {
        echo '这是一个不可访问的方法';
        echo '参数是'.$n;
    }
    private static function func2 () {

    }
    public function __call ($name, $value) {
        echo '触发了不可访问的方法';
        var_dump($name);
        var_dump($value);
    }
    public static function __callStatic ($name, $value) {
        var_dump($name);
        var_dump($value);
    }
}

$mc = new MyClass;
$mc->func('aaaa', 123);
$mc->func2('1212');


