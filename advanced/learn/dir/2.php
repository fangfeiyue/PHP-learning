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

//  删除空目录
$path = 'b/c';
if (!file_exists($path)) {
    mkdir($path, 755, true);
    echo '目录创建成功';
} else {
    if (rmdir($path)) {
        echo '目录删除成功';
    }else {
        echo '目录删除失败';
    }
}