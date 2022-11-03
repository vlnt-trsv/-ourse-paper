<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo 'Недоспустимая длина логина';
        exit;
    }
    else if (mb_strlen($email) < 0 || mb_strlen($email) > 30) {
        echo 'Недоспустимо длина почты (от 2 до 30 символов)';
        exit;
    }
    else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
        echo 'Недоспустимо длина пароля (от 2 до 10 символов)';
        exit;
    }

    $pass = md5($pass."dslkkdska4432432lkj4324");

    require "blocks/connect.php";
    
    $mysql->query("INSERT INTO `users` (`login`, `email`, `pass` ) 
    VALUES ('$login', '$email', '$pass')");

    $mysql->close();
    
    header('Location: login.php');
    
?>

