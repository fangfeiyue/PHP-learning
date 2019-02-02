<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

function loader($a) {
  include "./$a.php";
}

spl_autoload_register("loader", true, true);

class D implements C {
  public function sayHello() {
    echo "hello world";
  }
}

$d = new D;
$d->sayHello(); // hello world



