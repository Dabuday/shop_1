<?php $db = require_once "../includes/connection.php"; ?>

<?php echo (int)$_GET['id']; ?>

<?php $data = $db->execute("UPDATE Pollen SET name='$name', price='$price' WHERE id = '$_GET['id']'"); ?>
<?php header('Location: list_file.php');?>