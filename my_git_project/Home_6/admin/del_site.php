<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:
    ?>

<?php include("../admin/admin_header.php")?>

<?php

$host = 'localhost'; // адрес сервера
$database = 'userlistdb'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '123123'; // пароль
?>

<?php

if(isset($_GET['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = (int) $_GET['id']; 
 
    $query ="DELETE FROM `Honey` WHERE id = " . $id;
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    
    echo "<script>window.onload = function() {window.location = 'del_site.php';}</script>";
    mysqli_close($link);
}


<?php
	$conn = new mysqli($host, $user, $password, $database) or die  ('Невозможно открыть базу');

	$result = mysqli_query($link, $query);
	while ($row = $result->fetch_assoc()) {  ?>

    <div class="grid_1_of_4 images_1_of_4">

		<form method="GET" action="del_site.php">
		
			<a href="preview.html""><img src="img/logo.jpg" alt=""/></a>
				<h2><?php echo($row['name']); ?>/</h2>
				<h2><?php echo($row['id']); ?>/</h2>
			<div class="price-details">
			<div class="price-number">
				<p><span class="rupees"> <?php echo($row['price'].' грн.'); ?></p>
			</div>
			<div class="add-cart">
				<h4><a type='submit'>Удалить</a></h4>
				<input type="hidden" name="id" value="<?php echo($row['id']); ?>">
				<input type='submit' value='Удалить'>
			</div>
			<div class="clear"></div>
			</div>
		</form>
	</div>
    <?php
	}
	?>
<?php endif; ?>
<?php include ("../includes/footer.php")?>
