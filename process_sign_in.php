<?php
    require 'connect.php';
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    if(!isset($mail) || !isset($password) || !isset($name)){
        header('location: sign_up.php?');
        exit;
    }
    $sql = "insert into user(mail, password, name)
            values('$mail', '$password', '$name')";
    mysqli_query($connect, $sql);

    session_start();
    $_SESSION['mail'] = $mail;
    $_SESSION['password'] = $password;
    header('location: sign_in.php');