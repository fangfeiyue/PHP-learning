<?php
header('content-type:text/html;charset=utf-8');
echo 1 + 3,'<br/>';
echo '1' + '3', '<br/>';
echo 1 + true, '<br/>';
echo 1 + false, '<br/>';
echo 1 + null, '<br/>';
echo 1 + '3fang','<br/>'; // 4
echo 1 + '333fang','<br/>'; //334
echo false, '<br/>';
$var = array();
if ($var){
    echo '真的';
}else{
    echo '假的';
}