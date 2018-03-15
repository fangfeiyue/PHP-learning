<?php
header('content-type:text/html;charset=utf-8');

function calc(){

    $op = $_POST['op'];
    $act = $_POST['act'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($act){
        if (is_numeric($num1) && is_numeric($num2)){
            switch ($op){
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case '/':
                    if ($num2){
                        return $num1 / $num2;
                    }
                    exit('除数不能为零');
                default :
                    return '你输入计算内容是啥玩意。。。。。。';
            }
        }else{
            return '你输入的计算内容时啥玩意。。。。。。';
        }
    }
}

echo calc();