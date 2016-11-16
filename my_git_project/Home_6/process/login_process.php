<?php
$db = require_once "../includes/connection.php";
session_start();
if(isset($_POST["login"])) {
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $query = $db->execute("SELECT * FROM usertbl WHERE username='{$username}' AND password='{$password}' LIMIT 1");
        if(!empty($query) || !isset($query[0]) || !isset($query[0]['username']))
        {
            $dbusername = $query[0]['username'];
            $dbpassword = $query[0]['password'];
            if($username == $dbusername && $password == $dbpassword)
            {
                // старое место расположения
                //  session_start();
                $_SESSION['session_username'] = $username;
                $_SESSION['user'] = $query[0];
                /* Перенаправление браузера */
                header("Location: http://localhost/HomeWork/Home_6/intropage.php");
            }
        } else {
            //  $message = "Invalid username or password!";
            $_SESSION['error'] = "Invalid username or password!";
        }
    } else {
         $_SESSION['error'] = "All fields are required!";
    }
}
//header("Location: http://localhost/HomeWork/Home_6/login.php");