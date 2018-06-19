<?php
namespace A;
function time() {
    echo '时间函数';
}

time();

namespace B;
function time() {
    echo '时间函数';
}

time();
// 调用A命名空间下的time方法
\A\time();
// 调用B命名空空间下的time方法
\B\time();
// 调用系统的time方法
echo \time();