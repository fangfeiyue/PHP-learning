<?php
header('content-type:text/html;charset=utf-8');

// 新建一个接口A，里面有func1和func2两个方法，用接口B继承接口A，再用一个类实现接口B，要求对实现了接口B的类进行实例化并调用func1方法，得到任意两个整数之间的所有整数的和（包括任意的两个整数），并赋值给对象属性，打印该属性，运行代码，将得到的整数和显示在浏览器页面中。

interface A {
    public function func1 ($numA, $numB);
    public function func2 ();
}
interface B extends A {

}
class MyClass implements B {
    public $sum = 0;

    public function func1 ($numA, $numB) {
        for ($i = $numA; $i <= $numB; $i++) {
            $this->sum += $i;
        }
        echo $this->sum;
    }
    public function func2 () {

    }
}
$mc = new MyClass;
$mc->func1(0, 100);


interface C {
    public function test();
}

abstract class D implements C {
    abstract function test();
}