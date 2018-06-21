<?php
$fileName = $_GET['filename'];
$filePath = './files/'.$fileName;

if (!file_exists($filePath)) {
    exit('文件不存在'); 
}else {
    header('Content-type:application/octet-stream');
    header('Content-Disposition:attachment;filename='.basename($filePath));
    readfile($filePath);
}