<?php
class MyClass {
  public $a = 'a';
  private $c = 'c';
  protected $b = 'b';

  public function echoStr() {
    echo $this->a, $this->b, $this->c;
  }
}

$obj = new MyClass;
$obj->echoStr(); // abc
// echo $obj->a; // a
// echo $obj->b; // Fatal error: Uncaught Error: Cannot access protected property MyClass::$b
// echo $obj->c; // Fatal error: Uncaught Error: Cannot access private property MyClass::$c