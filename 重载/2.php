<?php
 class MyClass {
  public function __call($name, $arg) {
    var_dump($name, $arg);
  }
  
  public static function __callStatic($name, $arg) {
    var_dump($name, $arg);
  }

  protected static function test() {}
 }

 $obj = new MyClass;

 MyClass::test(342);  // string(4) "test" array(1) { [0]=> int(342) } 
 $obj->echoName(12);  // echoName array(12)

