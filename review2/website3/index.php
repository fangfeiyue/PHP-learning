<?php
if (filter_has_var(INPUT_POST, 'submit')) {
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $message = $_POST['message'];
  if (!empty($name) && !empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
      $toEmail = "294925572@qq.com";
      $subject = 'Contact Request From'.$name;
      $messgae = '<h2>Contact Request</h2><h4>姓名：</h4><p>' . $name . '</p><h4>邮箱：</h4><p>' . $email . '</p><h4>信息:</h4><p>' . $message . '</p>';
      $headers = "MIME-Version:1.0\r\nContent-Type:text/html;charset=UTF-8\r\nFrom" . $name . "<" . $email . ">\r\n";

      if (mail($toEmail, $subject, $message, $headers)) {
        $errMsg = "邮件发送成功";
        $errClass = "alert-success";
      }else {
        $errMsg = "邮件发送失败";
        $errClass = "alert-danger";
      }
    }else {
      $errMsg = "请输入正确的邮箱";
      $errClass = "alert-danger";
    }
  }else {
    $errMsg = "不能为空";
    $errClass = "alert-danger";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>邮件发送</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">邮件发送</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="alert <?php echo $errClass; ?>"><?php echo $errMsg ? $errMsg : '' ?></div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>名字</label>
        <input type="text" name="name" class="form-control" value="<?php echo $_POST['name'] ? 111 : '222' ?>">
      </div>
      <div class="form-group">
        <label>邮箱</label>
        <input type="text" name="email" class="form-control" value="<?php echo $_POST['email'] ? $email : '' ?>">
      </div>
      <div class="form-group">
        <label>消息</label>
        <textarea name="message" class="form-control" value="121212122"><?php echo $_POST['message'] ? $message : '' ?></textarea>
      </div>
      <br/>
      <button type="submit" name="submit" class="btn btn-primary">发送</button>
    </form>
  </div>
</body>
</html>