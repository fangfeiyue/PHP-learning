<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

$arr = [
  323,
  34,
  4545,
  "age"=>18,
  "userName"=>"fang",
];

foreach ($arr as $key => $value) {
  echo $key."=>".$value."<br/>";
}

$arr = [
  ["userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
  ["userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
  ["userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
  ["userName"=>"fang", "age"=>18, "email"=>"29@qq.com"],
  ["userName"=>"fang", "age"=>18, "email"=>"29@qq.com"]
];

foreach ($arr as $subArr) {
  foreach($subArr as $value) {
    echo $value."<br/>";
    echo "<hr/>";
    echo "current=>".current($arr);
  }
}

echo "<hr/>";
echo current(array(1,2,3,4));

$arr = array(1,1);
foreach ($arr as $item) {
  echo $item;
  // echo "<hr/>";
  // echo "<br/>".current($arr);
}






