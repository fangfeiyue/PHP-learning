<?php
// 设置错误级别，E_ALL但是除了NOTICE
error_reporting(E_ALL&~E_NOTICE);

header("content-type:text/html;charset=utf-8");

function echoStr($str) {
  echo $str, "<br/>";
}

echo '!\r@\n#\t%a\\b\'c\$de',"<br/>"; // !\r@\n#\t%a\b'c\$de
echo "!\r@\n#\t%a\\b\'c\$de"; // ! @ #	%a\b\'c$de

$userName = "fang";

echo "<br/>";

echo "$userName是$userName";
echo "<br/>";
echo '$userName是$userName', '<br/>';
echo "{$userName}是$userName", "<br/>";

// 对于字符串中的指定字符做增删改查操作

$str = "abcedf";
echoStr($str{0});


$userName = "fang";

$str = <<<'EOF'
  我的名字是$userName;
EOF;
echoStr($str);

echoStr("<hr/>");
echoStr(intval("123"));
echoStr(floatval("123.3323"));
echoStr(floatval(false));

echo PHP_OS;

echo 4**2;

$var = 1;
echo $var++; // 1
echo $var--; // 2

$var = 1;
echo ++$var; // 2
echo --$var; // 1


var_dump(
  3<=>1, // 1
  3<=>3, // 0
  3<=>4  // -1
);

echo "<hr/>";
echo $sessionId?:'没有值';
session_start();