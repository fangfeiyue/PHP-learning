<?php
header('content-type:text/html;charset=utf-8');
print_r($_FILES);

return;
$error = $_FILES['upload']['error'];

if ($error) {
    switch ($error) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_FROM_SIZE:
            echo '文件大小超限';
            break; 
        case UPLOAD_ERR_PARTIAL:
            echo '文件上传不完整';
            break;
        case UPLOAD_ERR_NO_FILE:
            echo '上传文件为空';
            break;
    }
} else {
    $result = move_uploaded_file($_FILES['upload']['tmp_name'], './uploads/'.$_FILES['upload']['name']);
    echo $result ? '上传成功' : '上传失败';
}
