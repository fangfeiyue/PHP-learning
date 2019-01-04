<?php
header("content-type:text/html;charset=utf-8");

function operateMySql($sql) {
  # 连接数据库
$mysqli = new mysqli("localhost", "root", "root", "person");

  if (!$mysqli->connect_errno) {
    echo "数据库连接成功";
  }else {
    echo "数据库连接失败";
  }

  # 设置编码格式
  $mysqli->query("set names utf-8");

  # 执行sql语句
  $result = $mysqli->query($sql);

  if ($result) {
    echo "数据插入成功";
  }else {
    echo "数据插入失败";
  }

  # 关闭数据库
  $mysqli->close();
}

operateMySql("insert into `students` (`id`,`firstName`,`lastName`,`email`,`address`,`city`,`state`) values(NULL, '张三', '李四', '3333@qq.com', '河北', '石家庄', '中国')");