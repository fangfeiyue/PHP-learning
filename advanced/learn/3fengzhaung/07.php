<?php
header('content-type:text/html;charset=utf-8');

class FatherClass {
    public $a = 'public';
    protected $b = 'protected';
    private $c = 'private';

    public function func1 () {
        echo 'public func';
    }
    protected function func2 () {
        echo 'protected func';
    }
    private function func3 () {
        echo 'private func';
    }
}

class ChildClass extends FatherClass {
    function test () {
        $this->func1();
        $this->func2();
        // $this->func3(); // Fatal error
    }
}
$child = new ChildClass;
echo $child->a;
// echo $child->b; //  Fatal error
// echo $child->c; // Notice: Undefined property

$child->func1();
// $child->func2(); // Fatal error
// $child->func3(); // Fatal error
$child->test();