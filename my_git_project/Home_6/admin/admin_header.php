<?php

session_start();

if(!isset($_SESSION["session_username"])):
   header("location:login.php");
else:
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Административная панель</title>
    <link href="../css/style.css" media="screen" rel="stylesheet">
</head>
<body>
<div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            <div class="logo">
                <a href="../index.php"><img src="../img/logo.jpg"/></a>
            </div>
            <style>
                .call {  float: left; /* Обтекание справа */  }
                .rightstr {  text-align: right; /* Выравнивание по правому краю */  }
            </style>

            <div class="call"><h1>ПАСІКА Адміністратора</h1></div>
            <h2><div class="rightstr"><strong><?php echo  $_SESSION['session_username'];?> </div></h2>
            <div style="clear: left"></div>

            <div class="account_desc">
                <ul>
                    <li><a href="../register.php"">Register</a></li>
                    <li><a href="../login.php">Login</a></li>
                    <li><a href="../logout.php"">Exit</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <hr />
        <div class="menu">
            <ul>
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../Honey.php">Honey</a></li>
                <li><a href="../Pollen.php">Pollen</a></li>

                <li><a href="../admin/site.php">Добавить</a></li>
                <li><a href="../admin/edit_site.php">Редактировать</a></li>
                <li><a href="../admin/del_site.php">Удалить</a></li>

                <div class="clear"></div>
                <br>
                <br>
            </ul>
        </div>

<?php endif; ?>


