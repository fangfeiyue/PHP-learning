<?php
class MyClass {
  public $str = 123;
}

$a = new MyClass;

$b = &$a;

$a = 3333;

var_dump($a); // 333
var_dump($b); // 333