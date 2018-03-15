<?php
header('content-type:text/html;charset=utf-8');
$userInput = (int)$_POST['number'];

if ($userInput % 2 == 0){
    echo '用户输入的是偶数', $userInput;
}else{
    echo '用户输入的是奇数', $userInput;
}

echo max(1);