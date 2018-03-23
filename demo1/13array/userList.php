<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" bgcolor="#abcedf" width="80%" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>编号</td>
            <td>姓名</td>
            <td>年龄</td>
            <td>邮箱</td>
        </tr>
        <?php
            $users[] = ['id'=>1, 'name'=>'f', 'age'=>11, 'email'=>'294925572@qq.com'];
            $users[] = ['id'=>1, 'name'=>'f', 'age'=>11, 'email'=>'294925572@qq.com'];
            $users[] = ['id'=>1, 'name'=>'f', 'age'=>11, 'email'=>'294925572@qq.com'];
            $users[] = ['id'=>1, 'name'=>'f', 'age'=>11, 'email'=>'294925572@qq.com'];
            foreach($users as $user){
        ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['age']?></td>
            <td><?php echo $user['email']?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>