<?php
header('content-type:text/html;charset=utf-8');

// 检测目录是否存在，不存在则创建 
$path = 'king';

if (!file_exists($path)) {
    if (mkdir($path)) {
        echo '目录创建成功<br/>';
    }else {
        echo '目录创建失败';
    }
} else  {
    echo '目录已经存在<br/>';
}

// 创建多级目录
// $path = 'b'.DIRECTORY_SEPARATOR.'c';
$path = 'b/c';
echo $path.'<br/>';
// 755是设置文件权限，7代表所有者可读可写可执行，5代表所有组可读可执行，5代表其他用户可读可执行权限
mkdir($path, 755, true);
