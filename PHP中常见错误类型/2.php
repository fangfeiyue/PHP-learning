<?php
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");

function echoRes($str) {
  echo $str."<br/>";
}

function globalErrorHandler($errorno, $errstr, $errfile, $errline) {
  echoRes($errorno);
  echoRes($errstr);
  echoRes($errfile);
  echoRes($errline);

  //  error_types 里指定的错误类型都会绕过 PHP 标准错误处理程序， 除非回调函数返回了 FALSE
  return false;
}

set_error_handler(globalErrorHandler);

// 系统级别的错误
$fb = fopen('./adasd.html');

// 用户级别的错误
$errMsg = "err";
if ($errMsg == "err") {
  // trigger_error — 产生一个用户级别的 error/warning/notice 信息
  trigger_error($errMsg, E_USER_WARNING);
}

