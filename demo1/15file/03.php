<?php
// 文件内容操作
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

$fileName = 'info.txt';

// 打开文件
$handle = fopen($fileName, 'r');
$res = fread($handle, 3);

echo "${res}<br/>";


// 读取文件中的所有内容
$res = fread($handle, filesize($fileName));
echo $res, '<br/>';

echo ftell($handle), '<br/>';

fseek($handle, 0);

echo '<hr/>';
echo fread($handle, filesize($fileName));

// fclose — 关闭一个已打开的文件指针
fclose($handle);

// copy('https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=862591842,2864954084&fm=27&gp=0.jpg', 'img.jpg');

$fileName = 'img.jpg';
$handle = fopen($fileName, 'rb+');
$res = fread($handle, filesize($fileName));
fclose($handle);

echo $res;