<?php
function get_all_files($path) {
    if (!is_dir($path)) {
        return false;
    }
    if ($handler = opendir($path)) {
        $res = [];
        echo 'hello';
        while (($item = @readir($handler))!==false) {
            if ($item!='.' && $item!='..') {
                $pathName = $path.DIRECTORY_SEPARATOR.$item;
                is_dir($pathName)?$res[$pathName]=get_all_files($pathName):$res[]=$pathName;
            }
        }
    }else {
        return false;
    }
    closedir($handler);
    return $res;
}

print_r(get_all_files('king'));