<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:
    ?>

<?php include("../admin/admin_header.php")?>


<?php


// если запрос POST 
if(isset($_POST['name']) && isset($_POST['company']) && isset($_POST['id'])){
 
    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['date']));
    $images = htmlentities(mysqli_real_escape_string($link, $_POST['images']));
     
    $query ="UPDATE Pollen SET name='$name', price='$price' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}
 
// если запрос GET
if(isset($_GET['id'])){   
    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));
    $host = 'localhost'; // адрес сервера
    $database = 'userlistdb'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = '123123'; // пароль

    // создание строки запроса
    $query ="SELECT * FROM Pollen WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    //если в запросе более нуля строк
         
    while ($row = $result->fetch_assoc()) {  ?>

    <div class="grid_1_of_4 images_1_of_4">
        <form method='POST'>
        <a href="preview.html""><img src="img/logo.jpg" alt=""/></a>
        <h2><?php echo($row['name']); ?>/</h2>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees"> <?php echo($row['price'].' грн.'); ?></p>
            </div>
            <div class="add-cart">
                  <h4><a type='submit'>Редагувати</a></h4>
            </div>
            <div class="clear"></div>
        </div>
        </form>
    </div>
    <?php

        
    }
}
// закрываем подключение

?>


<?php endif; ?>
<?php include ("../includes/footer.php")?>
