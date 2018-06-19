<?php
// 在一个文件中定义命名空间T1,T1\test1,T1\test2,T2。每一个空间下都定义一个相同的类，类中有一个名为happy的方法，方法中输出“我在X空间，开心每一天”字符串。

namespace T1;
class Mood
{
    public function happy(){
        echo '我在T1空间，开心每一天<br/>';
    }
    public function __construct () {
        $this->happy();
    }
}
namespace T1\test1;
class Mood
{
    public function happy(){
        echo '我在T1\test1空间，开心每一天<br/>';
    }
    public function __construct () {
        $this->happy();
    }
}
namespace T1\test2;
class Mood
{
    public function happy(){
        echo '我在T1\test2空间，开心每一天<br/>';
    }
    public function __construct () {
        $this->happy();
    }
}
namespace T2;
class Mood
{
    public function happy(){
        echo '我在T2空间，开心每一天<br/>';
    }
    public function __construct () {
        $this->happy();
    }
}

$obj = new \T1\ Mood;
$obj = new \T1\test1\ Mood;
$obj = new \T1\test2\ Mood;
$obj = new \T2\ Mood;