<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Register</h1>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php');?>
        <div class="input-group" >
            <label for="username">Username :</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email :</l :abel>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password :</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm  :Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">สมัครเลย</button>
        </div>
        <p>เป็นสมาชิกแล้ว คลิ๊กที่นี่ <a href="login.php">เข้าสู่ระบบ</a></p>
    </form>
</body>
</html>