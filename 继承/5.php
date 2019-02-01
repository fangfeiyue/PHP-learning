<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class ParentClass {
  public $name = "f";

  public function sayHello() {
    echo "parent";
  }

  public function echoName() {
    echo 'echoName', $this->name;
  }
}

class ChildClass extends ParentClass {
  public $name = "d";

  public function sayHello() {
    echo "child";
    echo "<hr/>";
    echo parent::echoName();
  }
}

$child = new ChildClass;

echo $child->name; // d
$child->sayHello(); // child
// ParentClass::sayHello(); // parent

