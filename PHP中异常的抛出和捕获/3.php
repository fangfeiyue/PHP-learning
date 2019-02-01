<?php
try {
  throw new Exception("找不到文件", 1);
  throw new Exception("没有权限", 2);
}catch(Exception $err) {
  echo $err->getCode();
  echo $err->getMessage();
}