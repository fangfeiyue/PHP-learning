<?php
interface A {
  public function func();
}

abstract class B implements A {
  public function func(){}
}

class C extends B {
  public function func(){}
  public function echoHello(D $d) {
    echo "hello";
  }
}

class D extends B {
  public function func(){}
}

$c = new C;

function test(D $obj) {
  echo "ok";
}

// test($c); //Fatal error: Uncaught TypeError: Argument 1 passed to test() must be an instance of D, instance of C given

$d = new D;
test($d); // ok
$c->echoHello($d); // hello