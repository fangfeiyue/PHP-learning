<?php

$path = 'king';
$handler = opendir($path);

while (($item = readdir($handler)) !== false) {
    if ($item != '.' && $item != '..') {
        echo $item.'<br/>';
    }
} 

closedir($handler);