<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

interface MyInterface {
  public function func();
  public function test();
}

abstract class MyClass implements MyInterface {
  public function func() {
    echo "func";
  }
}

MyClass::func(); // func