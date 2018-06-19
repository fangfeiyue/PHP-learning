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




echo '<br/>';
class Example{
    //不可访问的属性
    protected $name = 'fang';
    //不可访问的普通方法    
	protected function getName () {
        echo $this->name;
    }
    //不可访问的静态方法
    private static function test () {
        
    }
	//魔术方法
    public function __set ($n, $v) {
        echo '给不可访问的属性赋值时我被触发:__set<br/>';
    }
    public function __get ($n) {
        echo '调用不可以访问的属性时我被触发:__get<br/>';
    }
    public function __isset ($n) {
        echo '对不可访问的属性使用empty()或者isset()函数时我被触发:__isset<br/>';
    }
    public function __unset ($n) {
        echo '对不可访问的属性使用unset函数时，我被触发：__unset<br/>';
    }
    public function __call ($n, $v) {
        echo '调用不可访问的普通方法时我们触发:__call<br/>';
    }
    public static function __callStatic ($n, $v) {
        echo '调用不可访问的静态方法时我被触发:__callStatic<br/>';
    }
}
//实例化对象
$exa = new Example;
//触发各种魔术方法
$exa->name;
$exa->name = 'yue';
isset($exa->name);
unset($exa->name);
$exa->getName();
$exa->test();