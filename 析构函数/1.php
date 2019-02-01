<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyClass {
  public function __construct() {

  }
  
  public function __destruct() {
    echo "执行了";
  }
}

$obj = new MyClass;







