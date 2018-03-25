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


// 拷贝文件
$oldFile = 'old.txt';
$newFile = 'newFile.txt';

if (file_exists($oldFile)){
    if (copy($oldFile, $newFile)){
        echo '<br/>拷贝成功';
    }else{
        echo '<br/>拷贝失败';
    }
}else{
    echo '<br/>拷贝的文件不存在';
}

// 拷贝远程文件
var_dump(copy('https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1046983545,2051560208&fm=27&gp=0.jpg', './img.jpg'));