<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

class FileException extends Exception {}

try {
  throw new FileException("自定义异常处理类");
}catch(Exception $err) {
  echo $err->getMessage();
}


