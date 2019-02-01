<?php
class ParentClass {
  public function sayHello() {
    echo "parent";
  }

  final public function sayNo() {
    echo "parent";
  }
}

class ChildClass extends ParentClass {
  public function sayHello() {
    echo "child";
  }

  public function sayNo() {
    echo "child";
  }
}

$child = new ChildClass;

$child->sayHello(); // child
$child->sayNo(); // Fatal error: Cannot override final method ParentClass::sayNo()

