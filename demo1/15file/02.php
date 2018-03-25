<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf8');

$path = './02/02.txt';
$fileName = '02.txt';


if (file_exists($fileName)){
    if (rename($fileName, $path)){
        echo '文件剪切成功<br/>';
    }else{
        echo '文件剪切失败<br/>';
    }
}else{
    echo '文件不存在<br/>';
}