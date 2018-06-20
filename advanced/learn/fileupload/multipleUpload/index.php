<?php

//定义根目录常量
define('APPROOT', str_replace('\\', '/', dirname(__FILE__)));
//实例化Upload上传对象
require_once APPROOT.'/controller/Upload.class.php';
$upload = new Upload();
//初始化$action参数
$action = empty($_GET['action']) || !in_array($_GET['action'], array('show', 'upload'))
	? 'show' : $_GET['action'];

if($action == 'show') {
	$type = empty($_GET['type']) || !in_array($_GET['type'], array('singleName', 'groupName'))
		? 'singleName' : $_GET['type'];
	$upload->showUploadForm($type);
} elseif($action == 'upload') {
	$upload->handleUploadFile();
}