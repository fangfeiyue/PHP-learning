<?php
header('content-type:text/html;charset=utf-8');

# 关系运算符

/* == === < > <= >= != !==  */
$num = 5;

if ($num <= 4){
  echo 'Binggo!';
} else if ($num == 5){
  echo 'five';
} else {
  echo 'nothing';
}

# 逻辑运算符

/**
  AND &&
  OR  ||
  XOR
 */

 $num = 3;

 if ($num > 4 AND $sum < 10){

 }

 # 异或，左右两边必须有一个为真才为真
 if ($num > 4 XOR $num < 10){
   echo '数字小于4或者是数字大于10';
 }

 #switch
 switch($favColor){
  case 'red':
    echo 'red';
  break;
  default:
    echo 'default';
 }

