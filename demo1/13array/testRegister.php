<?php
date_default_timezone_set('prc');
header('content-type:text/html;charset=utf-8');


$pwd = $_POST['pwd'];
$email = $_POST['email'];
$userName = $_POST['userName'];

print_r(compact('userName', 'pwd', 'email'));