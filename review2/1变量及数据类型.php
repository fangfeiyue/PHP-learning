<?php
header('content-type:text/html;charset=utf-8');

// echo可以将html元素输出到浏览器呈现
echo '<h1>hello world</h1>';

/**
  - 前缀"$"
  - 以字母或下划线开头
  - 由字母、数字、下划线组成
  - 驼峰命名法
  - 大小写敏感
 */

print('hello world');
echo '<br/>';

$outPut = 'output';

echo $outPut, '<br/>';


# 数据类型
/**
- String
- Integer
- Float
- Boolean
- Array
*/

$number = 5;
$float = 5.5;
$bool = true;

echo $bool,'<br/>';
echo $float, '<br/>';
echo $number, '<br/>';

# 字符串拼接用.不能用加号

$string = 'hello';
$string2 = 'word';

$greeting = $string.$string2;

echo $greeting, '<br/>';

# 单引号 & 双引号,单引号不解析变量，双引号解析变量

$greeting2 = '$string $string2';
$greeting3 = "$string $string2";

echo $greeting2, '<br/>', $greeting3;

function echoStr ($str){
  echo '<br/>', $str;
}

# 转义字符

$str3 = "ther're here";
$str4 = 'hello \\n world';
$str5 = "hello \\n world";
echoStr($str3);
echoStr($str4);
echoStr($str5);

# 常量

define('GREETING', 'hello world');

echoStr(GREETING);

