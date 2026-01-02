<?php
include 'header.php';
require 'database.php';
?>
<div class="content">
    
    <div class="product_container">
        <?php
        $query = "SELECT * FROM product";
        $res = mysqli_query($db_connection, $query);
        while ($product = mysqli_fetch_assoc($res)) { ?>
            <div class='product'>
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <p>Price: $<?php echo $product['price']; ?></p>
                <p><img src="image/<?php echo $product["image"]; ?>" alt=""></p>
                <p><input type="button" value="Buy Now"></p>
            </div>
        <?php } ?>
    </div>
</div>