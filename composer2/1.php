<?php
use Monolog\Logger;
use test_autoload\StudyComposer;

require "vendor/autoload.php";

$log = new Logger('name');
$composer = new StudyComposer();
var_dump($composer);