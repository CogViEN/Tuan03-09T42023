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
        session_start();
        if(empty($_SESSION['mail'])){
            header('location: sign_in.php');
            exit;
        }
    ?>
    <form action="process_change_password.php" method="post">
        Nhập mật khẩu cũ <input type="text" name="old_password" id="old_password">
        <span id="error_old_password"></span><br>
        Nhập mật khẩu mới <input type="text" name="new_password" id="new_password">
        <span id="error_new_password"></span><br>
        Xác nhận mật khẩu mới <input type="text" id="confirm_new_password">
        <span id="error_confirm_new_password"></span><br>
        <button onclick="return kt()">Đổi mật khẩu</button>
    </form>
    <script src="index3.js"></script>
</body>
</html>