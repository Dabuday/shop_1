<?php include("includes/header.php"); ?>
<link href="css/style.css" media="screen" rel="stylesheet">

<?php

$host = 'localhost'; // адрес сервера
$database = 'userlistdb'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '123123'; // пароль

$conn = new mysqli($host, $user, $password, $database) or die  ('Невозможно открыть базу');

$result = $conn->query("SELECT * FROM `Pollen`");
while ($row = $result->fetch_assoc()) {  ?>

    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html""><img src="img/logo.jpg" alt=""/></a>
        <h2><?php echo($row['name']); ?>/</h2>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees"> <?php echo($row['price'].' грн.'); ?></p>
            </div>
            <div class="add-cart">
                <h4><a href="preview.html">Add to Cart</a></h4>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php
}
?>
<?php include("includes/footer.php"); ?>
