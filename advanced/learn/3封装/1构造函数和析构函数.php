<?php
header('content-type:text/html;charset=utf-8');

class MyClass {
    public $name;
    public $age;

    public function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
        
        echo $this->name, $this->age;
    }
}

$mc = new MyClass('fang', 18);


class Test {
    public function __destruct () {
        echo '执行了析构函数';
    }
}

$test = new Test;
$test = null;
