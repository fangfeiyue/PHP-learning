<?php
header('content-type:text/html;charset=utf-8');

// 属性的重载
class MyClass {
    public $name = 'fang';
    protected $age = 18;
    public function __get ($n) {
        // echo '触发了不可访问的属性'.$n;
        return $this->age;
    }
    public function __set ($n, $v) {
        $this->$n = $v;
    }
    public function __isset ($n) {
        echo '判断一个不可访问的属性是否存在'.$n;
    }
    public function __unset ($n) {
        echo '销毁一个不可访问的属性'.$n;
    }
}

$xiao = New MyClass;

// echo $xiao->age = 33;
// echo $xiao->age;

isset($xiao->age);
unset($xiao->age);