<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class SimpleClass {
  // 错误的属性声明
  public $var1 = "hello"."world";
  public $var2 = <<<EOD
  hello world;
EOD;
  public $var3 = 1 + 2;

  // 正确的属性声明
  public $var6 = 3;
  public $var7 = array(true, false);
}

$test = new SimpleClass;






