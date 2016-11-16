<?php $db = require_once "../includes/connection.php"; ?>

<?php echo (int)$_GET['id']; ?>

<?php $data = $db->execute("DELETE FROM Pollen WHERE id = '$_GET['id']'"); ?>
<?php header('Location: list_file.php');?>