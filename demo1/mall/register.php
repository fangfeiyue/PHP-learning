<?php
// 表单进行了提交处理
if (!empty($_POST['username']) || !empty($_POST['password']) || !empty($_POST['repassword'])){

    $userName = trim($_POST['username']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);

    if (!$userName){
        echo '用户名不能为空';
        exit;
    }
    if (!$password){
        echo '密码不能为空';
        exit;
    }
    if (!$repassword){
        echo '确认密码不能为空';
        exit;
    }
    if ($repassword !== $password){
        echo '两次输入密码不一致，请重新输入';
        exit;
    }

    // include_once 语句在脚本执行期间包含并运行指定文件。此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。如同此语句名字暗示的那样，只会包含一次。
    include_once './lib/func.php';

    // 数据库连接
    $connect = mysqlInit('localhost', 'root', 'root', 'my_mall');

    // 判断用户名是否存在数据表中
    $sql = "SELECT COUNT(id) FROM im_user WHERE userName=${userName}";
    $result = mysqli_query($connect,$sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo $data[0]['COUNT(id)'];

    if(isset($data)){

    }


    // echo count($data);

    exit;

    // 用户已经存在数据库中
    if (count($data)){
        echo '用户名已经存在，请重新输入';
        exit;
    }

    // 密码加密处理
    $password = createPassword($password);
    
    // 释放变量
    unset($obj, $result, $sql);

    // 插入数据
    $sql = "INSERT im_user(userName, password, create_time) VALUES('${userName}', '${password}', '{$_SERVER['REQUEST_TIME']}')";

    $obj = mysqli_query($connect, $sql);

    // 判断是否成功插入数据
    if ($obj){
        echo '插入数据ok<br/>';
        echo $obj;
        echo sprintf('恭喜您注册成功，用户名是%s，用户id是%s',$userName, $userId);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>M-GALLARY|用户注册</title>
    <link type="text/css" rel="stylesheet" href="./static/css/common.css">
    <link type="text/css" rel="stylesheet" href="./static/css/add.css">
    <link rel="stylesheet" type="text/css" href="./static/css/login.css">
</head>
<body>
<div class="header">
    <div class="logo f1">
        <img src="./static/image/logo.png">
    </div>
    <div class="auth fr">
        <ul>
            <li><a href="login.php">登录</a></li>
            <li><a href="register.php">注册</a></li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="center">
        <div class="center-login">
            <div class="login-banner">
                <a href="#"><img src="./static/image/login_banner.png" alt=""></a>
            </div>
            <div class="user-login">
                <div class="user-box">
                    <div class="user-title">
                        <p>用户注册</p>
                    </div>
                    <form class="login-table" name="register" id="register-form" action="register.php" method="post">
                        <div class="login-left">
                            <label class="username">用户名</label>
                            <input type="text" class="yhmiput" name="username" placeholder="Username" id="username">
                        </div>
                        <div class="login-right">
                            <label class="passwd">密码</label>
                            <input type="password" class="yhmiput" name="password" placeholder="Password" id="password">
                        </div>
                        <div class="login-right">
                            <label class="passwd">确认</label>
                            <input type="password" class="yhmiput" name="repassword" placeholder="Repassword"
                                   id="repassword">
                        </div>
                        <div class="login-btn">
                            <button type="submit">注册</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p><span>M-GALLARY</span> ©2017 POWERED BY IMOOC.INC</p>
</div>

</body>
<script src="./static/js/jquery-1.10.2.min.js"></script>
<script src="./static/js/layer/layer.js"></script>
<script>
    $(function () {
        $('#register-form').submit(function () {
            var username = $('#username').val(),
                password = $('#password').val(),
                repassword = $('#repassword').val();
            if (username == '' || username.length <= 0) {
                layer.tips('用户名不能为空', '#username', {time: 2000, tips: 2});
                $('#username').focus();
                return false;
            }

            if (password == '' || password.length <= 0) {
                layer.tips('密码不能为空', '#password', {time: 2000, tips: 2});
                $('#password').focus();
                return false;
            }

            if (repassword == '' || repassword.length <= 0 || (password != repassword)) {
                layer.tips('两次密码输入不一致', '#repassword', {time: 2000, tips: 2});
                $('#repassword').focus();
                return false;
            }

            return true;
        })

    })
</script>
</html>