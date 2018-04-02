<?php
/**
 * 数据库连接初始化
 *
 * @param [type] $host 主机
 * @param [type] $userName 数据库用户名
 * @param [type] $password 数据库密码
 * @return [type] $link
 */
// function mysqlInit($host, $userName, $password){
//     // 数据库操作
//     $link = mysql_connect($host, $userName, $password, $dbName);
    
//     // 判断是否连接失败
//     if (!$link){
//         echo mysql_error();exit;
//     }

//     // 选择数据库
//     mysql_select_db($dbName);

//     // 设置客户端数据集
//     mysql_set_charset('utf8');

//     return $link;
// }

function mysqlInit($host, $port, $user, $password, $dbName){

    $link = mysqli_init();

    if (!$link){
        die("mysqli_init failed");
    }

    $success = mysqli_real_connect(
        $link, 
        $host, 
        $user, 
        $password, 
        $db,
        $port
    );

    if (!$success){
        die("Connect Error: " . mysqli_connect_error());
    }

    // 选择数据库
    mysql_select_db($dbName);

    // 设置客户端数据集
    mysql_set_charset('utf8');

    return $link;
    
}