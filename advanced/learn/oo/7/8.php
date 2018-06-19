<?php
namespace A\B;
function test () {
    echo 'test function';
}
namespace A;
$a = 'A\B\test';
$a = '\A\B\test';
$a();