<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Login</h1>
    </div>

    <form action="login_db.php" method="post">
    <?php if (isset($_SESSION['errror'])) :?> 
        <div class="errror">
            <h2>
                <?php
                    echo $_SESSION['errror'];
                    unset($_SESSION['errror']);
                ?>
            </h2>
        </div>
    <?php endif ?>
        <div class="input-group">
            <label for="email">Email :</l :abel>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label for="password">Password :</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="log_user" class="btn">เข้าสู่ระบบ</button>
        </div>
        <p>ถ้ายังไม่เป็นสมาชิก มาสมัครได้ที่นี่ <a href="register.php">สมัครสมาชิก</a></p>
    </form>
</body>
</html>