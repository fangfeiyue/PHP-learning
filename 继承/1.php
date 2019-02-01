<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class ParentClass {
  public $a = 'a';
  protected $b = 'b';
  private $c = 'c';

  public function testPublic(){}
  protected function testProtected(){}
  private function testPrivate(){}
}

class ChildClass extends ParentClass {

}

$child = new ChildClass;

echo $child->a;
// echo $child->b; // Uncaught Error: Cannot access protected property ChildClass::$b
echo $child->c;

$child->testPublic();
// $child->testProtected();
$child->testPrivate();
