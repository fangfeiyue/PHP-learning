<?php
  header("content-type:text/html;charset=utf-8");

  function sanitizeFormUserName($input) {
    return str_replace(" ", "", strip_tags($input));
  }

  function sanitizeFormString($input) {
    return ucfirst(strtolower(str_replace(" ", "", strip_tags($input))));
  }

  function sanitizeFormPassword($input) {
    return strip_tags($input);
  }
  
  if (isset($_POST["registerBtn"])) {
    $name      = sanitizeFormString($_POST["name"]);
    $email     = sanitizeFormString($_POST["email"]);
    $userName  = sanitizeFormUserName($_POST["userName"]);
    $password  = sanitizeFormPassword($_POST["password"]);
    $password2 = sanitizeFormPassword($_POST["password2"]);

    $account->register($userName, $name, $email, $password, $password2);
  }