<?php

$path = 'king';
$dh = opendir($path);
// 判断是否成功打开目录
if ($dh) {
    echo '成功进入目录';        
} else {
    echo '没有找到这个目录或者没有权限操作这个目录';
}

closedir($path);