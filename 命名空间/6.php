<?php
namespace A\B;
class MyClass {
  public function __construct() {
    echo "空间A\B中的类实例化了";
  }
}

echo __NAMESPACE__; // A\B
// 使用include引用外部文件不会导致命名空间的改变
include "./6_1.php";
echo __NAMESPACE__; // A\B

