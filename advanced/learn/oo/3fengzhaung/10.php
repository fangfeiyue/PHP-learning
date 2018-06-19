<?php
header('content-type:text/html;charset=utf-8');

interface MyInterface {
    const num = 123;
    public function func1 ();
    public function func2 ();
}
class MyClass implements MyInterface {
    public function func1 () {

    }
    public function func2 () {

    }
}
abstract class MyAbstract implements MyInterface {
    abstract function func1 ();
    abstract function func2 ();
}

interface ParentInterface {
    public function func1 ();
}
interface ChildInterface extends ParentInterface {
    public function func2();
}
class TestClass implements ChildInterface {
    public function func1 () {}
    public function func2 () {}
}



