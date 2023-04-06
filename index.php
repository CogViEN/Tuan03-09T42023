<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['username'])){
            header('location: sign_in.php');
            exit;
        }
        $name = $_SESSION['username'];
            
    ?>
    <h1> Hello <?php echo $name ?></h1>
    <a href="change_password.php">Change password</a><br>
    <a href="process_sign_out.php">Sign out</a>
</body>
</html>