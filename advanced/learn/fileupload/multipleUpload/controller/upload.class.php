<?php

if (!defined('APPROOT')) exit;

class Upload {
    private $file = array();    // 上传的多个文件信息
    private $return;    // 上传结果
    
    // 显示上传模板
    public function showUploadForm ($templateName) {
        echo file_get_contents(APPROOT.'/view/'.$templateName.'.html');
    }
}