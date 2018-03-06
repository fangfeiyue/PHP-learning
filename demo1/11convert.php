<?php
header('content-type:text/html;charset=utf-8');
$var = 1;
echo gettype($var);

settype($var, "boolean");
echo gettype($var);

