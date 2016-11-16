<?php $db = require_once "includes/connection.php"; ?>
<?php include("includes/header.php"); ?>

<?php $data = $db->execute("SELECT * FROM `Honey`"); ?>
<?php foreach ($data as $item) : ?>
    <div class="grid_1_of_4 images_1_of_4">
        <a href="preview.html""><img src="img/logo.jpg" alt=""/></a>
        <h2><?php echo($item['name']); ?>/</h2>
        <div class="price-details">
            <div class="price-number">
                <p><span class="rupees"> <?php echo($item['price'] . ' грн.'); ?></p>
            </div>
            <div class="add-cart">
                <h4><a href="preview.html">Add to Cart</a></h4>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php endforeach; ?>
<?php include("includes/footer.php"); ?>
