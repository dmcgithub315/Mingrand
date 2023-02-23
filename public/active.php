<?php
session_start();
include('connect.php');
$username = $_SESSION['usernameip'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$code = $_POST['code'];
if($code != $_SESSION['code']){
    echo "Your code is incorrect. Try again!";
    exit;
} else {
    @$addUser = mysqli_query($conn, "
    INSERT INTO user (
        username,
        password,
        email,
        name,
        position
    )
    VALUE (
        '{$username}',
        '{$password}',
        '{$email}',
        '{$name}',
        'User'
    )
");
if ($addUser)
    echo "Your account has been actived! <a href='index.php'>Go Home</a> ";
else
    echo "It's some error in registor. Please try again. <a href='signup.php'>Try again</a>";
    }
?>