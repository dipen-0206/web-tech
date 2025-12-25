<?php
require "database.php";

session_start(); // must be started at the beginning of the script

$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "select count(*) from users where email='$email'";

$res = mysqli_query($db_connection, $query);
$count = mysqli_num_rows($res);

echo $count;    

die;


if($username === 'admin' && $password === '123') {
    
    $_SESSION['user'] = 'admin'; // Store user info in session
    header("Location: dashboard.php");
} else if($username == 'customer' && $password === '123') {
    $_SESSION['user'] = 'customer'; // Store user info in session
    header("Location: dashboard.php");
} else {
    // Failed login
    echo "Invalid username or password. Please try again.";
}


