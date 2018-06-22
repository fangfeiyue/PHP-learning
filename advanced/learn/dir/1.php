<?php
$path = 'test';
var_dump(is_dir($path));
echo '<br/>';
// 得到当前的工作目录
echo getcwd().'<br/>';
// 返回一个目录的磁盘总大小
echo disk_total_space('/').'<br/>';
// 返回路径中的目录部分
echo dirname(__FILE__).'<br/>';


