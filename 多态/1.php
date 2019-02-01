<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

abstract class MyAbClass {
  abstract public function func();
}

class ChildClass extends MyAbClass {
  public function func() {}
}

// 抽象类继承一个抽象类这个抽象类不需要定义父类中的所有抽象方法
abstract class SonClass extends MyAbClass {}







