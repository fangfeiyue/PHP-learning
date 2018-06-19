<?php
header('content-type:text/html;charset=utf-8');

class Grade {
    final public function func1 () {
        echo 'we have 20 students';
    }
}

class Girl extends Grade {
    public function func2 () {
        parent::func1();
    }
}

$girl = new Girl;
$girl->func2();
