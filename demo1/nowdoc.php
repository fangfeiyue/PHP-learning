<?php
header('content-type:text/html;charset=utf-8');

// nowdoc
$userName = 'feijidapao';
$str = <<<"EOD"
    <h1>This is a test</h1>
    $userName
EOD;

echo $str;