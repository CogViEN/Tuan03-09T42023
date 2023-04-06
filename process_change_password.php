<?php
    session_start();
    if(empty($_SESSION['mail'])){
        header('location: sign_in.php');
        exit;
    }
    $mail = $_SESSION['mail'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    require 'connect.php';
    $sql = "select count(*) from user
            where mail='$mail' and password='$old_password'";
    $res = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($res);
    $cnt = $each['count(*)'];
    if($cnt == 1){
        $sql = "update user
                set password='$new_password'
                where mail='$mail'";
        mysqli_query($connect, $sql);
        echo '<h1>Change your password successfully!<h1>';
        header( "Refresh:2; url=index.php", true, 303);
    }
    else{
        echo '<h1>You write wrong old password!<h1>';
        header( "Refresh:2; url=change_password.php", true, 303);
    }
    