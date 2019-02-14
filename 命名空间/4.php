<?php
namespace A\B;
class MyClass {
  function __construct() {
    echo "A\B<br/>";
  }
}

echo __NAMESPACE__; //A\B

namespace A;
class MyClass {
  function __construct() {
    echo "A<br/>";
  }
}

echo __NAMESPACE__; // A

$obj = new MyClass;// A\B A 非限定名称
$obj = new \A\B\ MyClass;// A\B 完全限定名称
$obj = new \A\MyClass;// A 完全限定名称
$obj = new B\MyClass;// A\B 限定名称

