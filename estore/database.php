<?php
$db_host = "localhost";
$db_user =  "root";
$db_password = "";
$db_name = "estore_db";

$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);    

if (!$db_connection) {
    die("Database connection failed: " . mysqli_connect_error());
}else {
    echo "Database connected successfully";
}   

?>