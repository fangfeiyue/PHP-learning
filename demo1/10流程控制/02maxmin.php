<?php
header('content-type:text/html;charset=utf-8');

// 测试学生分数是否及格

$score = '20';

if (is_numeric($score)){
    switch($score){
        case $score >= 90:
            echo '优秀';
            break;
        case $score >= 80:
            echo '良好';
            break;
        case $score >= 60:
            echo '及格';
            break;
        default :
            echo '居然没有及格。。。。';
            break;
    }
}else{
    echo '这分数简直逆天了，系统无法判断呀。。。';
}