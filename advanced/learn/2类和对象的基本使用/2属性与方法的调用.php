<?php
header('content-type:text/html;charset=utf-8');

class Student {
    public $girl = 40;
    public $boy = 40;

    public function sum () {
        echo $this->boy;
        echo '班级里有男生也有女生';
    }
    public function show () {
        $this->sum();
    }
}

$student = new Student;
echo $student-> girl;
$student->show();

$student->girl = '女生数量';
echo $student->girl;




//定义名为Worker的类
Class Worker
{
    //定义五种属性
    public $name = '小红';
    public $age = '19';
    public $sex = '女';
    public $occupation = '仓库登记员';
    public $transportation = '我是小红,我每天搭地铁上班';
    //定义两种方法
    public function job(){
        $this->work();
    }
    public function work(){
    //输出我是谁，每天乘什么样的交通工具去上班

        echo $this->transportation;
    }
}

//实例化对象
$workerone = new Worker;
//调用job方法
$workerone->job();
//再实例化一个对象
$workertwo = new Worker;
//修改属性
$workertwo->name = '小黄';
$workertwo->sex = '男';
$workertwo->occupation = '车间操作员';
$workertwo->transportation = '我是小黄，我每天搭地铁去上班';
//用第二个对象调用job方法
$workertwo->job();