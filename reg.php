<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reg.css">
    <link rel="stylesheet" href="assets/css/register and login/login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="wow.min.js"></script>
    <script>
        new WOW().init( );
        </script>
    <title>wave. reg</title>
</head>
<body style="margin: 0;">
<div class="reg">
    <img src="assets/img/login/login1.png" style="height:971px;" alt="#">
</div>

<main>
    <div class="box-login wow animate__animated animate__fadeIn">
        <div class="exit-to-index"><a class="exit-to-index" href="index.html">Вернуться</a></div>

        <a class="box-login-1" href="login.php">Войти</a>
        <a class="box-login-2">Регистрация</a>

        <form action="check.php" method="post">
            <input type="text" id="login" class="form__input2" name="login" autocomplete="off" placeholder="Логин">
            <input type="text" id="email" class="form__input" name="email" autocomplete="off" placeholder="Эл.почта">
            <input type="password" id="pass" class="form__input1" name="pass" autocomplete="off" placeholder="Пароль">
            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
        </form>

        <div class="box-block">
            <input type="checkbox" class="custom-checkbox" id="color-1" name="color-1" value="indigo">
            <div class="box-block-text">Запомнить пароль</div>
            <div class="box-block-text2">Забыли пароль?</div>
        </div>
    </div>
        
</main>
</body>
</html>