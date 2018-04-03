<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');

function mysqlInit($host, $userName, $password, $dbName){
    // 连接数据库
    $connect = mysqli_connect($host, $userName, $password, $dbName) or die('数据库连接失败');

    // 设置字符集
    mysqli_query('set names utf8');

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