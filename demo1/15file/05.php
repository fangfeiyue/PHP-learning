<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


$fileName = '2.txt';
$handle = fopen($fileName, 'ab+');

if (fwrite($handle, '1212121')){
    echo '写入成功<br/>';
}else{
    echo '写入失败<br/>';
}

// rewind — 倒回文件指针的位置
rewind($handle);

$res = fread($handle, filesize($fileName));
fclose($handle);

if ($res){
    echo $res.'读取成功<br/>';
}else{
    echo '读取失败<br/>';
}


