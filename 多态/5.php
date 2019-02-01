<?php
// 实现多个接口
interface Ainter {
  public function a();
}

interface Binter {
  public function b();
}

class MyClass implements Ainter, Binter {
  public function a() {}
  public function b() {}
}
