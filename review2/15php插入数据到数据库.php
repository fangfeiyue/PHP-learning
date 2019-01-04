<?php
header("content-type:text/html;charset=utf-8");

# 连接数据库
$mysqli = new mysqli("localhost", "root", "root", "person");

# 判断数据库是否连接成功
if (!$mysqli->connect_errno){
  echo "数据库连接成功";
}else { # 只要不为零就表示连接失败
  echo "数据库连接失败";
  die($mysqli->connect_error);
}

# 设定编码格式
$mysqli->query('set names utf8');

# 执行sql语句
$result = $mysqli->query("INSERT INTO `students` (`id`, `firstName`, `lastName`, `email`, `address`, `city`, `state`) VALUES (NULL, '飞豆云科', '恒久远', '123@qq.com', '河北石家庄', '石家庄', '中国')");

if ($result) {
  echo "插入成功";
}else {
  echo "插入失败";
}

# 关闭数据库
$mysqli->close();
