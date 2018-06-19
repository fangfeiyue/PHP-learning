<?php
header('content-type:text/html;charset=utf-8');

abstract class AbstractClass {
    abstract public function func1 ();
    public function func2 () {

    }
}

abstract class Son extends AbstractClass {
    
}

class Child extends AbstractClass {
    public function func1 () {
        echo 'hello world';
    }
}

$child = new Child;
$child->func1();
