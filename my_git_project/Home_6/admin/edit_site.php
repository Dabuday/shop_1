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
        <form method='POST' action="edit_site.php">
            <input type="text" name="id" value="<?php echo $row['id'] ?>">
            <input type="text" name="name" value="<?php echo $row['name'] ?>">
            <input type="text" name="price" value="<?php echo $row['price'] ?>">
            <input type="text" name="date" value="<?php echo $row['date'] ?>">
            <input type="text" name="images" value="<?php echo $row['images'] ?>">
        </form>
    </div>
    <?php
    }
}
// закрываем подключение

?>


<?php endif; ?>
<?php include ("../includes/footer.php")?>
