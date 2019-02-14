<?php
// date_default_timezone_set("PRC");
// header("content-type:text/html;charset=utf-8");

namespace A;
function func() {
 echo "我是A命名空间下func函数";
}

namespace B;
function func() {
  echo "我是B命名空间下的func函数";
}

func(); // 我是B命名空间下的func函数

// 调用A命名空间下的func方法
\A\func();

echo \time(); // 全局空间
