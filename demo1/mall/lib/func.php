<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function mysqlInit($host, $userName, $password, $dbName){
    // 连接数据库
    $connect = mysqli_connect($host, $userName, $password, $dbName) or die('数据库连接失败');

    // 设置字符集
    @mysqli_query('set names utf8');

    return $connect;
}


/**
 * 密码加密处理
 *
 * @param string $password 要处理的密码
 * @return string 处理过后的密码
 */
function createPassword($password){
    
    if (!$password){
        return false;
    }     

    return md5(md5($password).'wanlisun?123');
}

/**
 * 消息提示
 *
 * @param int $type 1 成功 2 失败
 * @param string $msg 提示信息
 * @param string $url 要跳转的url
 * @return void
 */
function msg($type, $msg = null, $url = null){
    $toUrl  = "location:msg.php?type=${type}";
    $toUrl .= $msg ? "&msg=${msg}" : "";
    $toUrl .= $url ? "&url=${url}" : "";
    header($toUrl);
    exit;
}