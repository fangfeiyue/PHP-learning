<?php
// instanceof

interface A {
  public function func();
}

abstract class B implements A {}

class C extends B {
  public function func() {}
}

class D extends B {
  public function func() {}
}

$obj = new C;

var_dump($obj instanceof A);  // true
var_dump($obj instanceof B);  // true
var_dump($obj instanceof C);  // true
var_dump($obj instanceof D);  // false
