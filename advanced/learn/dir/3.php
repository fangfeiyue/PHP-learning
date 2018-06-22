<?php

$path = 'king';
$handler = opendir($path);

while (($item = readdir($handler)) !== false) {
    if ($item != '.' && $item != '..') {
        // 检测是否是文件
        if (is_file($path.'/'.$item)) {
            echo '文件：'.$item, '<br/>';
        } else {
            echo '目录：'.$item, '<br/>';
        }
    }
}

closedir($handler);