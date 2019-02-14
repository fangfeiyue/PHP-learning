<?php
// 命名空间别名和导入
function loader($name) {
  echo $name; // A\B\C\MyClass
  exit();
}

spl_autoload_register("loader", true, true);

// 导入空间使用完全限定名称，不要第一个\
use A\B\C\MyClass;
$obj = new MyClass;


// 导入多个
use B\C\D\MClass, E\F\Test;
$obj = new Test;

// 导入多个并且取别名 as
use A\B\C\yClass, C\D\E\Test as T;
$obj = new T;





