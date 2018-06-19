<?php
namespace A\B;
class MyClass {
    public function __construct () {
        echo '空间A\B中的类实例化了<br/>';
    }
}

namespace A;
class MyClass {
    public function __construct () {
        echo '空间A中的类实例化了<br/>';
    }
}

 $obj = new MyClass; // 空间A中的类实例化了
 $obj = new \A\B\MyClass; // 空间A\B中的类实例化了
 $obj = new \A\MyClass; // 空间A中的类实例化了
 $obj = new B\MyClass;  // 空间A\B中的类实例化了
