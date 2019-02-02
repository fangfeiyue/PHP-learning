<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyLoader {
  public function loader($a) {
    include "./$a.php";
  }

  public function init() {
    spl_autoload_register([$this, "loader"], true, true);
  }
}

$obj = new MyLoader;
$obj->init();

class A extends B {}

$obj = new A;
$obj->sayHello(); // hello

