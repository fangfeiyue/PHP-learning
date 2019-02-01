<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyClass {
  protected $name = "f";

  public function __set($name, $val) {
    echo "set==>", $name, $val, "<hr/>";
    $this->name = $val;
  }

  public function __get($name) {
    echo "get==>", $name, "<hr/";
  }

  public function __unset($name) {
    echo "unset==>", $name, "<hr/";
  }

  public function __isset($name) {
    echo "isset==>", $name, "<hr/";
  }
}

$obj = new MyClass;

echo $obj->name;  // name
$obj->name = "y"; // name  y
empty($obj->name);  // name
unset($obj->name); // name









