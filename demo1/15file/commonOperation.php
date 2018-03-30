<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

/**
 * 创建文件操作
 * @param string $fileName
 * @return true || false
 */
function createFile(string $fileName){
     if (file_exists($fleName)){
         return false;
     } 
     if (file_exists(dirname($fileName))){
         // 创建目录，可以创建多级 
         mkdir(dirname($fileName, 0777, true));
     }
    //  if (touch($fileName)){
    //      return true;
    //  }
 
    if (file_put_contents($fileName, '')===false){
        return true;
    }    
    return false;
}
// createFile('123');


/**
 * 删除文件
 *
 * @param string $fileName
 * @return true || false
 */
function delFile(string $fileName){
    // 检测文件是否存在，并且是否有权限操作
    if (!file_exists($fileName) || !is_writable($fileName)){
        return false;
    }
 
    if (unlink($fileName)){
        return true;
    }
     
    return false;
}

// var_dump(delFile('123'));



/**
 * 复制文件
 *
 * @param string $fileName 要复制的文件名
 * @param string $dest  复制到哪
 * @return true||false
 */
function copyFile(string $fileName, string $dest){
    if (!is_dir($dest)){
        mkdir($dest, 0777, true);
    }
    $destName = $dest.DIRECTORY_SEPARATOR.basename($fileName);
    if (file_exists($destName)){
        return false;
    }
    echo $destName;
    // 拷贝文件
    if (copy($fileName, $destName)){
        return true;
    }
    return false;
}

// var_dump(copyFile('old.txt','a'));

/**
 * 重命名文件
 *
 * @param string $oldFileName 文件原来的名字
 * @param string $newFileName 文件新的名字
 * @return true || false
 */
function renameFile(string $oldFileName, string $newFileName){
    if (!file_exists($oldFileName)){
        return false;
    }
    
    $pathName = dirname($oldFileName);
    $destName = $pathName.DIRECTORY_SEPARATOR.$newFileName;

    if (file_exists($destName)){
        return false;
    }
    
    if (rename($oldFileName, $newFileName)){
        return true;
    }

    return false;
}

// var_dump(renameFile('img.jpg', 'lala.img'));

/**
 * 剪切文件
 *
 * @param string $fileName 要剪切的文件名
 * @param string $dest 剪切到哪
 * @return true || false
 */
function cutFile(string $fileName, string $dest){
    if (!file_exists($fileName)){
        return false;
    }
    if (!is_dir($dest)){
        mkdir($dest, 0777, true);
    }
    $destName = $dest.DIRECTORY_SEPARATOR.basename($fileName);
    if (is_file($dest)){
        return false;
    }
    if (rename($fileName, $destName)){
        return true;
    }
    return false;
}

// var_dump(cutFile('old.txt', './b'));




/**
 * 获取文件信息
 *
 * @param string $fileName文件名称
 * @return 文件信息相关数组||false
 */
function getFileInfo(string $fileName){
    if (!is_file($fileName) || !is_readable($fileName)){
        return false;
    }
    return [
        'atime'=>date("Y-m-d H:i:s", fileatime($fileName)),
        'mtime'=>date("Y-m-d H:i:s", filemtime($fileName)),
        'ctime'=>date("Y-m-d H:i:s", filectime($fileName)),
        'size'=>transByte(filesize($fileName)),
        'type'=>filetype($fileName),
    ];
}

/**
 * 字节单位转换的函数
 *
 * @param integer $byte 字节
 * @param integer $precision 默认精度，保留小数点后两位
 * @return string 转换之后的内容
 */
function transByte(int $byte, int $precision=2){
    $kb = 1024;
    $mb = 1024 * $kb;
    $gb = 1024 * $mb;
    $tb = 1024 * $gb;

    switch ($byte){
        case $byte >= $tb:
            return round($byte/$tb, $precision).'TB';
        case $byte >= $gb:
            return round($byte/$gb, $precision).'GB';
        case $byte >= $mb:
            return round($byte/$mb, $precision).'MB';
        case $byte >= $kb:
            return round($byte/$kb, $precision).'KB';
        default:
            return $byte.'B';
    }
}

// var_dump(getFileInfo('newFile.txt'));



/**
 * 读取文件内容
 *
 * @param string $fileName 要读取的文件名
 * @return mixed 返回读取到的文件内容 || false
 */
function readFileContent(string $fileName){
    if (is_file($fileName) || is_readable($fileName)){
        return file_get_contents($fileName);
    }

    return false;
}


// echo readFileContent('newFile.txt');


/**
 * 读取文件中的内容到数组中
 *
 * @param string $fleName 文件名
 * @param boolean $skipEmptyLines 是否跳过空行
 * @return array || false
 */
function readFileContentToArray(string $fileName, bool $skipEmptyLines=false){
    if (is_file($fileName) || is_readable($fileName)){
        if ($skipEmptyLines){
            return file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }else{
            return file($fileName);
        }
    }

    return false;
}

// var_dump(readFileContentToArray('newFile.txt', true));



/**
 * 向文件中写内容
 *
 * @param string $fileName 文件名
 * @param [type] $data 要写入的数据
 * @return bool true || false
 */
function wirteFile(string $fileName, $data){
    $dirname = dirname($fileName);
    // 检测目标录制是否存在
    if (!file_exists($dirname)){
        mkdir($dirname, 0777, true);
    }

    // 判断内容时否是数组或对象
    if (is_array($data)||is_object($data)){
        $data = serialize($data);
    }

    // 向文件中写内容
    if (file_put_contents($fileName, $data)){
        return true;
    }else{
        return false;
    }
}

// var_dump(wirteFile('newFile.txt', '无奈呀无奈'));
// var_dump(wirteFile('feiyue.txt', '无奈呀无奈'));





function wirteFileCombine(string $fileName, $data, $clearFlag=false){
    $dirname = dirname($fileName);
    // 检测目标录制是否存在 
    if (!file_exists($dirname)){
        mkdir($dirname, 0777, true);
    }

    // 检测文件是否存在并且可读
    if (is_file($fileName) && is_readable($fileName)){
        // 读取文件内容，和新写入的内容拼装到一起
        if (filesize($fileName) > 0){
            $srcData = file_get_contents($fileName);

        }         
    }

    if (!$clearFlag){
        // 判断内容时否是数组或对象
        if (is_array($data)||is_object($data)){
            $data = serialize($data);
        } 

        $data = $srcData . $data; 
    }

    // 向文件中写内容
    if (file_put_contents($fileName, $data)){
        return true;
    }else{
        return false;
    }
}

// var_dump(wirteFileCombine('nong', '222', false));







