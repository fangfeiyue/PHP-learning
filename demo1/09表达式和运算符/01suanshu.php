<?php
header('content-type:text/html;charset=utf-8');

$a = 2.2;
$b = 4;

echo $a + $b, '<br/>';
echo $a - $b, '<br/>';
echo $a * $b, '<br/>';
echo $a / $b, '<br/>';
echo 3 % 8, '<br/>'; //3
echo 3 % -8, '<br/>'; //3
echo -3 % 8, '<br/>'; //-3
echo -3 % -8, '<br/>'; //-3

// 测试幂运算
// echo 3 ** 3,'<br/>';


// 自增，自减
$i = 1;
// echo $i++, '<br/>';
echo ++$i, '<br/>';

$var = 0.2;
echo --$var;

$bool = true;
echo '<br/>', ++$bool;

// 测试字符串
$str = 'abcde';
echo '<br/>', ++$str;

// 得到指定字符的ASCII值
echo '<br/>', ord('a');

// 返回指定的字符
echo '<br/>', chr(98);

// 比较运算符
var_dump(1==true);
var_dump(1===true);
var_dump(1<>2);

var_dump(1<=>1);
var_dump(null ?? 2 ?? 3 ?? 77);

