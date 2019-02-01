<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class MyClass {
  static $age = 18;
  static $name = "fang";
  public $email = "2@qq.com";

  static function echoUserInfo() {
    echo self::$name; // fang
    echo MyClass::$age; // 18
    
    //由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用
    // echo $this->email;  // Uncaught Error: Using $this when not in object context
    //echo $this->age; // Fatal error: Uncaught Error: Using $this when not in object context
    // $this->say();
    
    echo "<hr/>";
    
    // 静态方法可以调用非静态方法，但此时非静态方法中不能用$this调用属性或方法
    self::say();
    MyClass::say();
  }

  public function say() {
    // 普通方法调用静态属性，同样使用self关键词或类名
    echo MyClass::$age;
    echo $this->email;
  } 
}

echo MyClass::$name;  // fang
MyClass::echoUserInfo();  // fang 18

$obj = new MyClass;
$obj->say();
echo "<hr/>";
$obj->echoUserInfo(); // fang 18







