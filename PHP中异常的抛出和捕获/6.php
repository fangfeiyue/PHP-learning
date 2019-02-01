<?php
function defaultExceptionHandle($e) {
  printf("Uncaught exception: %s in file %s on line %d", $e->getMessage(), $e->getFile(), $e->getLine());
}

// 设置用户自定义的异常处理函数
set_exception_handler(defaultExceptionHandle);

throw new Exception("漏掉的异常通知");




