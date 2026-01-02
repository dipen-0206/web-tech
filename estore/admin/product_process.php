<?php
require '../database.php';



$name = $_POST['product_name'];
$description = $_POST['product_description'];
$price = $_POST['price'];
$qty = $_POST['quantity'];
$image = $_POST['image'];

    $query = "INSERT INTO product (name, description, price, oty, image) VALUES ('$name', '$description', '$price', '$qty', '$image')";
    $res = mysqli_query($db_connection, $query);
    if ($res) {
        header("Location: add_product-form.php?success=1");
    }else {
        echo "Error: ";  
}



?>