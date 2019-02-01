<?php
class FileException extends Exception {
  const FILE_EXISTS = 1;
  const FILE_PERMISSION = 2;
}

function fileHandle() {
  throw new FileException("文件不存在", FileException::FILE_EXISTS);
  throw new FileException("没有权限", FileException::FILE_PERMISSION);
}

try {
  fileHandle();
}catch(FileException $err) {
  echo $err->getCode();
  echo $err->getMessage();
}