<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL &~ E_NOTICE);
date_default_timezone_set("PRC");
header("content-type:text/html;charset=utf-8");
echo $errorMsg;
echo "hello world";

error_reporting(0);
// function error() {}
// function error() {}

// 报告所有的错误类型
error_reporting(-1);

error_reporting(7);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

