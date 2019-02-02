<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

// function __autoload($a){
//   var_dump($a);
//   include "./$a.php";
// }

function myLoader($a) {
  include "./$a.php";  
}

spl_autoload_register("myLoader", true, true);

class A extends B {}

$obj = new A;
$obj->sayHello(); // hello 