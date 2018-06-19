<?php
header('content-type:text/html;charset=utf-8');

interface MyInterface {
    public function func1();
}
interface YourInterface {
    public function func2 ();
}

class ParentClass {

}

class ChildClass extends ParentClass implements MyInterface, YourInterface {
    public function func1() {

    }
    public function func2 () {
        
    }
}