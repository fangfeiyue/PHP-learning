<?php
header("content-type:text/html;charset=utf-8");

# 无参无返回值
function simpleFunction(){
  echo 'hello world';
}

simpleFunction();

# 有参有返回值
function addNumbers($num1, $num2){
  return $num1 + $num2;
}

echo addNumbers(1, 33);

# 有返回值无参


# 无返回值有参
function sayHello($name){
  echo "hello $name";
}

sayHello('dou');

# 函数传引用

$myNum = 5;

function addFive($num){
  $num += 5;
}

addFive($myNum);

echo $myNum;

function addTen(&$num){
  $num += 10;
}

addTen($myNum);

echo $myNum;