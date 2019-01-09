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
      <label for="loginUsername">用户名</label>
      <input type="text" id="loginUsername" name="loginUsername" placeholder="请输入用户名">
      <label for="loginUserpassword">密码</label>
      <input type="text" id="loginUserpassword" name="loginUserpassword" placeholder="请输入密码">
      <input type="submit" value="注册" name="register">
    </form>
  </div>    
</body>
</html>