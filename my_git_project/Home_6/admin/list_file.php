<?php
session_start();

if(!isset($_SESSION["session_username"])):
    header("location:login.php");
else:?>

<?php $db = require_once "../includes/connection.php"; ?>
<?php include("../admin/admin_header.php"); ?>


<?php $data = $db->execute("SELECT * FROM `Pollen`"); ?>
<?php foreach ($data as $item) : ?>
    <form method="GET" action="list_file.php">
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html""><img src="../img/logo.jpg" alt=""/></a>
        <input type="text" name="images" placeholder="<?php echo($item['images']); ?>" value="<?php echo $row['images'] ?>">: _img

        <input type="text" name="id" placeholder="<?php echo($item['id']); ?>" value="<?php echo $row['id'] ?>">: ___id
        <input type="text" name="name" placeholder="<?php echo($item['name']); ?>" value="<?php echo $row['name'] ?>">: name

        <div class="price-details">
            <div class="price-number">
                <input type="text" name="price" placeholder="<?php echo($item['price']); ?>" size="10" value="<?php echo $row['price'] ?>">: price
            </div>
            <div class="add-cart">
                <h4><a href="delete.php" name="id" value="<?php echo($item['id']); ?>">Delete</a></h4>
                 <input    type="hidden" name="id" value="<?php echo($item['id']); ?>">

                  <h4><a href="edit.php" name="i1" value="<?php echo($item['id']); ?>">Edit</a></h4>
                   <input  type="hidden" name="i1" value="<?php echo($item['id']); ?>">

            </div>
            <div class="clear"></div>
        </div>
    </div>
     </form>
<?php endforeach; ?>
<?php endif; ?>
<?php include ("../includes/footer.php")?>


