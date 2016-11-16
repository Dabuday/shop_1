<?php session_start();?>
<?php $db = require_once "includes/connection.php"; ?>
<?php include("includes/header.php"); ?>
<?php

if(isset($_SESSION["session_username"])){
    // вывод "Session is set"; // в целях проверки
    header("Location: intropage.php");
}
?>

<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
        <form action="process/login_process.php" id="loginform" method="post" name="loginform">
            <p><label for="user_login">Имя опльзователя<br>
                    <input class="input" id="username" name="username" size="20"
                           type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password" size="20"
                           type="password" value=""></label></p>
            <p style="color: red; font-weight: bold"><?php echo isset( $_SESSION['error']) ?  $_SESSION['error'] : ''?></p>
            <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
            <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>
