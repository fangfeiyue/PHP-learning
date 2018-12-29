<?php
header('content-type:text/html;charset=utf-8');

function echoRes($value){
  echo $value, '<br/>';
}

# substr  返回字符串的一部分
$outPut = "aabcdef";
echoRes(substr($outPut, 1)); //bcdef
echoRes(substr($outPut, 1, -2)); //bcd

# strlen 返回字符串的长度
echoRes(strlen($outPut));

# strpos 查找字符串中第一次出现的位置
echoRes(strpos($outPut, 'bc'));

# strrpos() 查找字符串中最后一次出现的位置
echoRes(strrpos('hello world', 'o'));

# trim 去除首尾空格
$text = "   hello world   ";
echoRes(trim($text));

# strtoupper 将字符串转为大写
echoRes(strtoupper('hello world'));

# strtolower 将字符串转为小写
echoRes(strtolower('HELLO WORLD'));

# ucwords 将每个单词的首字母大写
echoRes(ucwords('hello world'));

# str_replace 替换所匹配的内容
echoRes(str_replace('gong', 'fang', 'gongdoudou'));

# is_string 判断是否是字符串
echoRes(is_string('hello world'));

# gzcompress 压缩字符串
echoRes(gzcompress("asdfasdfasdfasdfaaaaaaaaaasdfasdgfdsgsfgsfgsdgasdfasd"));

# gzuncompress 解压字符串
echoRes(gzuncompress(gzcompress("asdfasdfasdfasdfaaaaaaaaaasdfasdgfdsgsfgsfgsdgasdfasd")));









# 过滤掉数组中非字符串的值
$arr = [1, 23, 4, '56', '345', '23'];

foreach($arr as $item){
  is_string($item) ? echoRes($item) : '';
}