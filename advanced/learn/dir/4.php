<?php
/**
 * 检测目录是否为空
 *
 * @param string 目录名称
 * @return boolean true | false
 */
function check_empty_dir (string $path) {
    // 检测目录是否存在，存在则打开
    if (!is_dir($path)) {
        return false;
    }

    // 打开指定目录
    $handler = opendir($path);

    // 读取
    while (($item = readdir($handler)) !== false) {
        // 去掉.和..操作
        if ($item != '.' && $item != '..') {
            return false;
        }
    }

    // 关闭句柄
    closedir($handler);
    return true;
}

/**
 * 读取目录下的所有文件
 *
 * @param string $path 目录名称
 * @return void  直接输出目录下的所有文件及子目录
 */
function read_directory ($path) {
    // 检测目录是否存在
    if (!is_dir($path)) {
        return false;
    }

    $handler = opendir($path);
    while (($item = @readdir($handler)) !== false) {
        if ($item != '.' && $item != '..') {
            // if (is_file($path.'/'.$item)) {
            //     echo '文件', $item, '<br/>';
            // }
            // if (is_dir($path.'/'.$item)) {
            //     echo '目录',$item, '<br/>';
            //     // 递归读取
            //     read_directory($path.'/'.$item);
            // }
            
            // 目录分隔符，是定义php的内置常量
            $pathName  = $path.DIRECTORY_SEPARATOR.$item;
            if (is_file($pathName)) {
                echo '文件', $item, '<br/>';
            }else {
                echo '目录', $item, '<br/>';
                
                // 获取当前函数的函数名
                $func = __FUNCTION__;
                $func($pathName);
            }
        }
    }
    closedir($handler);
}

// read_directory('king');

/**
 * 遍历目录下所有内容并返回
 *
 * @param string $path 目录名称
 * @return mixed    false | array 
 */
function read_directory1(string $path) {
    if (!is_dir($path)) {
        return false;
    }
    $handler = opendir($path);

    while (($item = @readdir($handler))!==false) {
        if ($item != '.' && $item != '..') {

            $pathName = $path.DIRECTORY_SEPARATOR.$item;
            if (is_file($pathName)) {
                echo '文件', $item, '<br/>';
                $arr['file'][] = $item;
            }else {
                echo '目录', $item, '<br/>';
                $arr['dir'] = $item;
                $func = __FUNCTION__;
                $func($pathName);
            }
        }
    }

    closedir($handler);
    return $arr; 
}

$arr = read_directory1('king');
var_dump($arr);