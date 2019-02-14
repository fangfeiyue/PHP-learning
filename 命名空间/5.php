<?php
namespace A;
function sayHello() {
  echo "A";
}

namespace B;
function sayHello() {
  echo "B";
}

$c = "\A\sayHello"; //A
$c();
$c = "\B\sayHello";
$c();   // B




