<?php session_start();?>
<?php
if(!isset($_SESSION["session_username"])) {
    $_SESSION['error'] = "Invalid username or password!";
   header("location:login.php");
}
?>
<?php header("location:admin/list_file.php");?>

  
