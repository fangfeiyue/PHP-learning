<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


$fileName = __DIR__.'/01.txt';

$handle = fopen($fileName, 'rd+');

if (fwrite($handle, 'fangfeiyue')){
    echo '写入成功';
}else{
    echo '写入失败';
}

fclose($handle);


