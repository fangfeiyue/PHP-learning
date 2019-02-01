<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyClass {
  const NAME = "ffy";
  const ID_CARD = "1111";

  public function echoIdCard() {
    // echo $this->ID_CARD; // 不可以用$this调用常量
    echo self::ID_CARD; // 1111
  }

  public static function echoName() {
    echo self::NAME;
    echo MyClass::ID_CARD;
  }
}

$obj = new MyClass;
echo MyClass::NAME;   // ffy
echo "<hr/>";
MyClass::echoName();  // ffy 1111  
echo "<hr/>";
$obj->echoIdCard();   // 1111




