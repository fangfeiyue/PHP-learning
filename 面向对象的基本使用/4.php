<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

$a = "abc";

$b = $a; // 传递赋值
$c = &$a; // 引用赋值

var_dump($a);
var_dump($b);
var_dump($c);

$a = "qq";

var_dump($a); // qq
var_dump($b); // abc
var_dump($c); // qq

class MyClass {
  public $str = "abc";
}

$a = new MyClass;

$b = $a;

var_dump($a);
var_dump($b);

$a->str = "aaaa";

var_dump($a);
var_dump($b);

$a = 123;

var_dump($a); //123
var_dump($b); // 





