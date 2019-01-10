<?php
  include "./includes/classes/Constants.php";
  include "./includes/classes/Account.php";

  $account = new Account;

  include "./includes/handlers/login_handler.php";
  include "./includes/handlers/register-handler.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>个人音乐平台</title>
</head>
<body>
  <div id="inputContainer">
    <form action="./register.php" method="POST" id="loginForm">
      <h2>登录您的账户</h2>
      <p>
        <label for="loginUsername">用户名</label>
        <input type="text" id="loginUsername" name="loginUsername" placeholder="请输入用户名">
      </p>
      <p>
        <label for="loginUserpassword">密码</label>
        <input type="text" id="loginUserpassword" name="loginUserpassword" placeholder="请输入密码">
      </p>
      <input type="submit" value="登录" name="loginBtn">
    </form>

    <form action="./register.php" method="POST" id="registerForm">
      <h2>注册新的账户</h2>
      <p>
        <label for="userName">用户名</label>
        <input type="text" id="userName" name="userName" required placeholder="请输入用户名">
      </p>
      <p>
        <label for="name">名字</label>
        <input type="text" id="name" name="name" required placeholder="请输入您的姓名">
      </p>
      <p>
        <label for="email">邮箱</label>
        <input type="text" id="email" name="email" placeholder="请输入您的邮箱" required>
      </p>
      <p>
        <label for="password">密码</label>
        <input type="text" id="password" name="password" placeholder="请输入您的密码" required>
      </p>
      <p>
        <label for="password2">确认密码</label>
        <input type="text" id="password2" name="password2" placeholder="请确认您的密码" required>
      </p>
      <input type="submit" value="注册" name="registerBtn">
    </form>
  </div>    
</body>
</html>