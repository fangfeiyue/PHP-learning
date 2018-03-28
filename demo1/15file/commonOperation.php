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
    
}