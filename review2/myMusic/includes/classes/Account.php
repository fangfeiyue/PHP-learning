<?php
class Account {
  private $errArray = array();

  public function __construct() {
  }

  public function register($userName, $name, $email, $password, $password2) {
    $this->validateUserName($userName);
    $this->validateName($name);
    $this->validateEmail($email);
    $this->validatePassword($password1, $password2);
  }

  private function validateUserName($userName) {
    if (strlen($userName)>25 || strlen($userName)<5) {
      array_push($this->errArray, "用户名长度要在5-25位之间");
      return;
    }
  }

  private function validateName($name) {
    if (strlen($name) > 25 || strlen($name) < 2) {
      array_push($this->errorArray, "名字长度要在2-25位之间");
      return;
    }
  }

  private function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($this->errArray, "邮箱地址不合法");
    }
  }

  private function validatePassword($password1, $password2) {
    if ($password1 != $password2) {
      array_push($this->errArray, "两次密码不一致");
      return;
    }

    if (preg_match("/[^A-Za-z0-9]", $password1)) {
      array_push($this->errArray, "密码只能是数字和字母组成！");
      return;
    }
  }
}
