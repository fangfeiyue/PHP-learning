<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class Dog {
  public $name = "小白";
  
  public function jiao() {
    return "汪汪";
  }

  public function show() {
    echo "小狗的名字是".$this->name.",它在对你".$this->jiao()."叫";
  }
}

$dog = new Dog;
$dog->show();