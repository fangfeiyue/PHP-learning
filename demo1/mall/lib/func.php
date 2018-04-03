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