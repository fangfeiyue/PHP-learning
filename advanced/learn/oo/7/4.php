<?php
// 在文件中声明两个命名空间，分别为Earth/China ，Earth/America，两个命名空间中都有一个名为Love的函数，要求函数输出“我是中国人/美国人，我爱人民，爱祖国，爱和平”，分别在两个空间中调用另一个空间的Love函数。
namespace Earth_China;
function love () {
    echo '我是中国人，我爱人民，爱祖国，爱和平';
}

\Earth_America\love();

namespace Earth_America;
function love () {
    echo '我是美国人，我爱人民，爱祖国，爱和平';
}
\Earth_China\love();
