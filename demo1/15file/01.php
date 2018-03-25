<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function echoContent($name = '', $content = ''){
    echo "-------------------${name}-------------------<br/>";
    echo $content, '<br/>';
}

// 文件信息相关api

// 1.filetype 取得文件类型

echoContent('filetype',filetype('./01.txt'));

// 2. 获取文件大小
echoContent('fileSize', filesize('./01.txt'));

// 3. 获取文件创建时间
echoContent('filectime', date('Y-m-d H:i:m', filectime('./01.txt')));

// 4.文件的修改时间
echoContent('filemtime', date('Y-m-d H:i:m', filemtime('./01.txt')));

// 5.文件的最后访问时间
echoContent('filemtime', date('Y-m-d H:i:m', fileatime('./01.txt')));

var_dump(
    is_readable('./01.txt'),
    is_writable('./01.txt'),
    is_executable('./01.txt')
);

// 6. 检测是否是一个文件
echoContent('is_file', is_file('./01.txt'));

// 7. 文件路径
$filename="./01.txt";
print_r(pathinfo($filename));


// basename
echoContent('basename', basename($filename));

// dirname
echoContent('dirname', dirname($filename));

//file_exists
echoContent('file_exists', file_exists($filename));

// touch 创建文件
// touch('doudou.txt');

// 删除文件
// unlink('doudou.txt');

// 重命名文件
if (file_exists('test.txt')){
    if (rename('test.txt', '01.txt')){
    echo '重命名成功';
    }else{
        echo '重命名失败';
    }
}else{
    echo '重命名文件不存在';
}



// 文件剪切

$fileName = 'cliboard.txt';
$path = './cliborad/cliborad.txt';

if (file_exists($fileName)){
    if (rename($filename, $path)){
        echo '文件剪切成功';
    }else{
        echo '文件剪切失败';
    }
}else{
    echo '文件不存在';
}





