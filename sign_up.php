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
    <h1>Đăng ký</h1>
    <form action="process_sign_in.php" method="post">
        Username <input type="text" name="name" id="name">
        <span id="error_name"></span><br>
        Mail <input type="mail" name="mail" id="mail">
        <span id="error_mail"></span><br>
        Password <input type="password" name="password" id="password">
        <span id="error_password"></span><br>
        <button onclick="return check()">Sign Up</button> 
    </form>
    <script src="./index.js"></script>
</body>
</html>