<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:
    ?>
<?php include("../admin/admin_header.php")?>

<?php endif; ?>

<?php

$host = 'localhost'; // адрес сервера
$database = 'userlistdb'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '123123'; // пароль

if(isset($_POST['name']) && isset($_POST['price'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
    $date = htmlentities(mysqli_real_escape_string($link, $_POST['date']));
    $images = htmlentities(mysqli_real_escape_string($link, $_POST['images']));
     
    // создание строки запроса
    $query ="INSERT INTO Pollen VALUES(NULL, '$name','$price','$date','$images')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
            <form  method="POST" >
                <p>
                    <label>Ведіть назву продукту<br>
                        <input type="text" name="name" id="name">
                    </label>
                </p>
                <p>
                    <label>Ведіть ціну товара<br>
                        <input type="text" name="price" id="price">
                    </label>
                </p>
                <p> <label>
                        <input type="submit" name="submit" id="submit" value="Добавить данные  в базу данных">
                    </label>
                </p>
            </form>
   
    <?php include "../includes/footer.php";?>
        </div>
    </div>
</body>
<htmle