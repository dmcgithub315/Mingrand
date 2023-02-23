<?php
session_start();
if($_SESSION['email']){
    $email = $_SESSION['email'];
}
include('connect.php');
if($_POST['code'] != $_SESSION['code']){
    echo "Your code is incorrect. Try again!";
    exit;
}
$code = addslashes($_POST['code']);
$npassword = addslashes($_POST['npassword']);
$renpassword = addslashes($_POST['re-npassword']);
if (!$code || !$npassword || !$renpassword){
    echo "Please input full information. <a href='javascript: history.go(-1)'>Go Back</a>";
    exit;
};
if($code != $_SESSION['code']){
    echo "Your code is incorrect. Try again!";
    exit;
}
if($npassword != $renpassword){
    echo "Your password did not match. Try again!";
    exit;
}
$uppercase = preg_match('@[A-Z]@', $npassword);
$lowercase = preg_match('@[a-z]@', $npassword);
$number    = preg_match('@[0-9]@', $npassword);
$specialChars = preg_match('@[^\w]@', $npassword);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($npassword) < 8){
        echo "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.<a href='javascript: history.go(-1)'>Go Back</a>";
        exit;
    } else {
        if ($npassword == $password) {
            echo "Please change password different from old password! <a href='javascript: history.go(-1)'>Go Back</a>";
            exit;
        } else {
            $npassword = md5($npassword);
            $query = mysqli_query($conn,"UPDATE `user` SET `password` = '{$npassword}' WHERE `email`='{$email}'");
            echo "Your password has been changed!<a href='/mingrand/public/login.php'>Login</a>";
            $_SESSION['password'] = $npassword;
        }
    }



?>