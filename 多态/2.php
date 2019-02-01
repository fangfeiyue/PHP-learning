<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

interface MyInterface {
  public function func();
  public function test();
  
  // 不能声明具体的方法
  // public function test2() {

  // }
}

class MyClass implements MyInterface {
  public function func(){}
  public function test(){}
}



