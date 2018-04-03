<?php
/**
 * 数据库连接初始化
 *
 * @param [type] $host
 * @param [type] $port
 * @param [type] $user
 * @param [type] $password
 * @param [type] $db
 * @return void
 */
function mysqlInit($host, $port, $user, $password, $db){
    $link = mysqli_init();

    if (!$link){
        die('mysqli_init failed');
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
        die('connect error'.mysqli_connect_error());
    }

    return $success;
}
