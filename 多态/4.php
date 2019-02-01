<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

interface Ainter {
  public function func();
}

interface Binter {
  public function test();
}

class MyClass implements Binter {
  public function funct() {}
  public function test() {}
}
