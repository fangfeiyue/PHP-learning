<?php
namespace A\B;
class MyClass {
    public function __construct () {
        echo '空间A\B中的类实例化了<br/>';
    }
}
echo __NAMESPACE__.'<br/>'; // A\B
include './6_1.php';    // 引入包含A命名空间的文件
echo __NAMESPACE__; // A\B
