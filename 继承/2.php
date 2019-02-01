<?php

class ParentClass {
  public function sayHello(){
    echo "parent say hello";
  }
}

class ChildClass extends ParentClass {
  public function sayHello() {
    echo "child say hello";
  }
}

$child = new ChildClass;

$child->sayHello(); // child say hello

