<?php
header('content-type:text/html;charset=utf-8');

// 接收表单发送过来的数据
echo $_POST['userName'], '<br/>';
echo $_POST['password'], '<br/>';
echo $_POST['email'], '<br/>';
echo $_POST['sex'], '<br/>';