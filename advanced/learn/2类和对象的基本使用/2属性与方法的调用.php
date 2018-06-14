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