<?php
header('content-type:text/html;charset=utf-8');

$userName = 'Fang';
$email = "1879999999@qq.com";
$gender = '';

var_dump($userName, $email, $gender);

echo "$userName", '<br/>';
echo '$userName', '<br/>';

$str = "He say I'm fine";
echo $str;

// 转义字符
$str = 'He say I\'m fine';
echo '<br/>', $str;

$str = "He say \"I'm fine\"";
echo '双引号===》》》', '<br/>', $str;

$str = '!\r@\n#\t%a\\';
echo '<br/>', '单引号===》转义字符===》》','<br/>', $str;

$str = "!\r@\n#\t%a";
echo '<br/>', '双引号===》转义字符===》》', '<br/>', $str, '<br/>';

echo '<hr/>';
$var = 123;
echo '测试转义','<br/>', "\$var的值为$var";
echo '<hr/>';
$userName = 'Fang';
echo "用户名：{$userName}哈哈";
echo '<hr/>';
echo '<hr/>';
echo '<hr/>';
echo '<hr/>';
echo '<hr/>';