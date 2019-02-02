<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyLoader {
  public static function loader($a) {
    include "./$a.php";
  }
}

// spl_autoload_register第一个参数以数组方式传入
spl_autoload_register(["MyLoader", "loader"], true, true);

class A extends B {}

$a = new A;
$a->sayHello(); // hello


