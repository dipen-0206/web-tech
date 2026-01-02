<?php include '../header.php';?>
<div class="content">
    <form action="product_process.php" method="post">
        <div></div>
        <div>
            <label>Product Name</label>
            <input type="text" id="product_name" name="product_name">
            <?php 
                if (isset($_GET['product_name_empty']) && !empty($_GET['product_name_empty'])); { ?>
                <span id="error">please enter your full name</span>
                <?php } ?>
        </div>
        <div>
            <label>Product Description</label>
            <input type="text" id="product_description" name="product_description">
        </div>
        <div>
            <label for="price">price</label>
            <input type="number" id="price" name="price" >
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" >
        </div>
        <div>
            <label for="image">Image</label> 
            <input type="file" id="image" name="image" >
        </div>
        <div>
            <input type="submit" value="Add product" id="add_product-btn">
        </div>

    </form>
</div>
<?php
include '../footer.php';
?>