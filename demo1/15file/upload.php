<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


function uploadFile(array $fileInfo){
     define('UPLOAD_ERRS', [
            'move_error'            => '文件移动失败',
            'no_allow_ext'          => '非法文件类型' ,
            'not_http_post'         => '文件不是通过HTTP POST方式上传上来的',
            'form_max_size'         => '超过了表单MAX_FILE_SIZE选项的值', 
            'not_true_image'        => '文件不是真实图片',
            'exceed_max_size'       => '超出允许上传的最大值',
            'upload_system_error'   => '系统错误',
            'upload_file_partial'   => '文件部分被上传',
            'upload_max_filesize'   => '超过了PHP配置文件中upload_max_filesize选项的值',
            'no_upload_file_select' => '没有选择上传文件', 
         ]);

     // 检测上传是否有误
     if ($fileInfo['error'] === UPLOAD_ERR_OK){
        // 检测上传文件类型
        $ext = strtolower(pathinfo($fileInfo['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowExt)){
            return UPLOAD_ERRS['no_allow_ext'];
        }

        // 检测上传文件大小是否符合规范
        if($fileInfo['size']>$maxSize){
            return UPLOAD_ERRS['exceed_max_size'];
        }

        // 检测是否是真实图片
        if ($imgFlag){
            if (@!getimagesize($fileInfo['tmp_name'])){
                return UPLOAD_ERRS['not_true_image'];
            }
        }

        // 检测文件是否是通过http post方式上传的
        if (!is_uploaded_file($fileInfo['tmp_name'])){
            return UPLOAD_ERRS['not_http_post'];
        }

        // 移动文件
        if (@!move_uploaded_file($fileInfo['tmp_name'], $dest)){
            return UPLOAD_ERRS['move_error'];
        }
     }else{
         switch ($fileInfo['error']){
            case 1:
                $mes = UPLOAD_ERRS['upload_max_filesize'];
                break;
            case 2:
                $mes = UPLOAD_ERRS['form_max_size'];
                break;
            case 3:
                $mes = UPLOAD_ERRS['upload_file_partial'];
                break;
            case 4:
                $mes = UPLOAD_ERRS['no_upload_file_select'];
                break;
            case 5:
            case 6:
            case 7:
            case 8:
                $mes = UPLOAD_ERRS['upload_system_error'];
                break;
         }
         return $mes;
     }
}