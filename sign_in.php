<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $mail = ""; $password = "";
        session_start();
        if(!empty($_SESSION['mail'])) $mail = $_SESSION['mail'];
        if(!empty($_SESSION['password'])) $password = $_SESSION['password'];
    ?>
    <h1>Đăng Nhập</h1>
    <form action="process_sign_up.php" method="post">
        Mail <input type="text" name="mail" id="mail" value=<?php echo $mail ?>>
        <span id="error_mail"></span><br>
        Password <input type="password" name="password" id="password" value=<?php echo $password ?>>
        <span id="error_password"></span><br>
        <button  onclick="return kt()">Sign in</button> 
    </form>
    <script src="./index2.js"></script>
</body>
</html>