<?php
session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:?>

<?php $db = require_once "../includes/connection.php"; ?>
<?php include("../admin/admin_header.php"); ?>

 <form  method="POST" >
                <p>
                    <label>Ведіть назву позиції<br>
                        <input type="text" name="nameTable" id="name">
                    </label>
                </p>
                <p>
                    <label>Ведіть ціну товара<br>
                        <input type="text" name="price" id="price">
                    </label>
                </p>
                <p> 
                    <select  name="operation" id="operation" >
                        <option value="Pollen" selected="selected"> Pollen </option>
                        <option value="Hohey"> Hohey </option>
                    </select>
                </p>
                <p> <label>
                        <input type="submit" name="submit" id="submit" value="Добавить">
                    </label>
                </p>
            </form>


<?php endif; ?>
<?php include ("../includes/footer.php")?>


