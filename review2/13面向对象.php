<?php
header("content-type:text/html;charset=utf-8");

function echoRes($res) {
  echo $res;
}

class Person {
  public $name = "fang";
  public $age = 18;
  private $salary = "你猜";

  public function sayHello() {
    echo "hello world";
  }

  public function setSalary($salary) {
    $this->salary = $salary;
  }

  public function getSalary() {
    return $this->salary;
  }

  # 构造函数
  public function __construct($name="111", $age=11) {
    $this->age = $age;
    $this->name = $name;
  }

  public function __destruct() {
    echo __CLASS__."被销毁了";
  } 
}

$person = new Person();
echoRes($person->name);
echoRes($person->age);
$person->sayHello();

# 存储和获取私有属性
$person->setSalary("飞豆云科");
echoRes($person->getSalary());

$person2 = new Person("飞豆云科", 16);
echoRes($person2->name);

class Customers extends Person{
  private $password;
  
  function __construct($name, $age, $password) {
    # 调用父级构造函数
    parent::__construct($name, $age);
    $this->password = $password;  
  }
  
  function getPassword() {
    return $this->password;
  }
}

$customer = new Customers("fang", 18, "123456");
echoRes($customer->getPassword());
