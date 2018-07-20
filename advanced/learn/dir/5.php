<?php
$path = 'king';
// 列出指定文件中的文件和目录
$info = scandir($path);

foreach ($info as $val) {
    if ($val!='.' && $val!='..') {
        if (is_file($path.DIRECTORY_SEPARATOR.$val)) {
            $arr['file'][] = $val;
        }else {
            $arr['dir'][] = $val;
        }
    }
}

print_r($arr);