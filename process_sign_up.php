<?php
    require 'connect.php';
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    if(!isset($mail) || !isset($password)){
        header('location: sign_in.php?');
        exit;
    }
    $sql = "select count(*),name from user
            where mail='$mail' and password='$password'";
    $res = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($res);
    $cnt = $each['count(*)'];
    $name = $each['name'];
    if($cnt == 1){
        session_start();
        $_SESSION['username'] = $name;
        $_SESSION['mail'] = $mail;
       header('location: index.php');
       exit;
    }
    else{
        echo '<h1> Wrong mail or password <h1>';
        header( "Refresh:2; url=sign_in.php", true, 303);
    }