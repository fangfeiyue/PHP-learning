<?php
// 字符串函数
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

$str1 = null;
$str2 = 'ab';
$str3 = '中国';

echo strlen($str1), strlen($str2), strlen($str3), '<br/>'; // 0, 2, 6
echo strlen($str1), strlen($str2), mb_strlen($str3), '<br/>'; // 0, 2, 2

// 字符串大小写转换
echo strtoupper('abc'), '<br/>';
echo strtolower('ABC'), '<br/>';


// 首字母大写
echo ucfirst('abc'), '<br/>';
// 每个单词的首字母大写
echo ucwords('hello world'), '<br/>';


// 字符串的替换
echo str_replace('a', 'b', 'javAscript'), '<br/>';
echo str_ireplace('a', 'b', 'javAscript'), '<br/>';

// 练习
$str = 'ZenD_CONTRollER_FronT'; //Zend_Controller_Front
$str = str_replace(' ', '_', ucwords(str_replace('_',' ', strtolower($str))));
echo $str, '<br/>', '<br/>';



// 字符串转实体函数
$str = "A>B,B<C,Tom&Jhon,He said:\"I'm OK\"";
echo htmlspecialchars($str, ENT_QUOTES), '<br/>';



// 删除空格或其他字符
$str = "\n\tABC\t\t";
echo ltrim($str), '<br/>';



// 字符串截图
echo substr('fangfeiyue', 2, 2), '<br/>';



//strrpos 计算指定字符串在目标字符串中最后一次出现的位置
echo strrpos('fang', 'a'), '<br/>';
echo strripos('fAang', 'a'), '<br/>'; //2



// 练习2
$fileName = 'abc.cd.gif.jpg.jpeg';
echo substr($fileName, strrpos($fileName, '.') + 1),'<br/>';

$fileName = 'a.b.c.png';
echo substr(strrchr($fileName, '.'), 1), '<br/>';




// 字符串的翻转
echo strrev($fileName) ,'<br/>';





