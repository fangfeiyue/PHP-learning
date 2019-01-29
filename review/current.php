<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");
// $transport = array('foot', 'bike', 'car', 'plane');
// echo current($transport);

// 数组指针相关函数

// key($array);
// current($array);

function echoRes($str) {
  echo $str,"<hr/>";
}

$arr = [
  "age"=>18,
  "email"=>"2qq.com",
  "userName"=>"fang"
];

echoRes(key($arr));
echoRes(current($arr));
echoRes(isset($arr));
echoRes(isset($a)?:"no");
echoRes(empty($a)?:"no");



