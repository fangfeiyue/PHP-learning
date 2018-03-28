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
createFile('123');