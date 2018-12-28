<?php
header('content-type:text/html;charset=utf-8');

function echoStr($val){
  echo $val,'<br/>';
}

# for循环

for($i = 0; $i < 10; $i++){
  echoStr($i);
}

# while循环

$i = 0;

while($i < 10){
  echoStr($i);
  $i++;
}

$i = 0;

# do...while

do{
  echoStr($i);
  $i++;
}while($i < 10);

# Foreach

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach($arr as $item){
  echoStr($item);
}

$arr1 = ["name"=>"fang", "sex"=>"man"];

foreach($arr1 as $key => $value){
  echoStr($key);
  echoStr($value);
}
