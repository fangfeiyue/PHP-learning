<?php

class ParentClass {
  public function sayHello() {
    echo "parent";
  }
}

class ChildClass extends ParentClass {}

$child = new ChildClass;

$child->sayHello(); // parent
