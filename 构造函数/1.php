<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyClass {
  private $name = null, $age = null;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function echoUserInfo() {
    echo $this->name, $this->age;
  }
}

$obj = new MyClass("fang", 18);

$obj->echoUserInfo(); // fang 18












