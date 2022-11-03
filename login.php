<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/register and login/login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="wow.min.js"></script>
    <script>
        new WOW().init( );
        </script>
    <title>wave. login</title>
</head>
<body style="margin: 0;">
<div class="login">
    <img src="assets/img/login/login1.png" style="height:971px;" alt="#">
</div>
<?php
        if ($_COOKIE['user'] == ''):
        ?>

    <div class="box-login wow animate__animated animate__fadeIn">
        <div class="exit-to-index"><a class="exit-to-index" href="index.html">Вернуться</a></div>
        
        <a class="box-login-1">Войти</a>
        <a class="box-login-2" href="reg.php">Регистрация</a>

        <form class="form" action="auth.php" method="post">
            <input type="text" id="login" class="form__input" name="login" autocomplete="off" placeholder="Логин">
            <input type="password" id="pass" class="form__input1" name="pass" autocomplete="off" placeholder="Пароль">
            <button class="btn btn-success" type="submit">Войти</button>
        <form>

        <div class="box-block">
            <input type="checkbox" class="custom-checkbox" id="color-1" name="color-1" value="indigo">
            <div class="box-block-text">Запомнить пароль</div>
            <div class="box-block-text2">Забыли пароль?</div>
        </div>
    </div>
    <?php else:?>
        <div class="header">
            <div class="header-box wow animate__animated animate__fadeInDown"><a href="index.html">
                <img class="header-img-home" src="assets/img/login-account/home.svg" alt=""></a>

                <img class="header-img-account" src="assets/img/login-account/account.svg" alt="">
                <div class="exit"><a href="exit.php" style="text-decoration: none; color:blue;"><img src="assets/img/login-account/exit.svg" style="width:50px;" alt="#"></a></p></div>
            </div>
            <div class="header-img-account-box wow animate__animated animate__fadeInUpBig"></div>
                        <script>
                            $('.header-img-account').click(function(){
                            $(".header-img-account-box").fadeToggle(400, "linear", "always");
                            });  
                        </script>
                        
        </div>
        <div class="login1 wow animate__animated animate__fadeInUpBig">
        <script>
                            $('.header-img-account').click(function(){
                            $(".login1").fadeToggle(400, "linear", "always");
                            });  
                        </script>
            <p class="login1-1">Привет <?=$_COOKIE['user']?>
        </div> 
        <?php endif;?>
        

</body>
</html>
