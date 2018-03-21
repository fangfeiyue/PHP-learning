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




// 字符串加密函数
$passworld = 'fang?@';
echo md5($passworld), '<br/>';



// 打乱字符串
echo str_shuffle('1254'), '<br/>';



// 字符串分割操作
$str = 'abc,defc,qml,dde';
print_r(explode(',', $str));
echo '<br/>';



// 将一个一维数组的值转化为字符串
$arr = array(1, 2, 3, 4, 5);
echo implode(';', $arr), '<br/>';



// 格式化字符串
$number = 5;
$str = '上海';
echo sprintf('there are %u million cars in %s', $number, $str ), '<br/>';
echo sprintf("两位小数%1\$.2f", 1),'<br/>';