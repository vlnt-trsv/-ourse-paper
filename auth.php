<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."dslkkdska4432432lkj4324");

    require "blocks/connect.php";
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' and `pass` = '$pass'");

    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такой пользователь не найден.";
        exit();
    }

    setcookie('user', $user['login'], time()+3600, "/");
    

    $mysql->close();
    
    header('Location: login.php');
?>



