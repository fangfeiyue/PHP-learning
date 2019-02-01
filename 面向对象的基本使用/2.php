<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");
class Dog {
  public $name = "小白";
  public $age = null;

  public function jiao() {
    echo "汪汪";
  }
}

$dog = new Dog;
