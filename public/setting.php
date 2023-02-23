<?php
session_start();
$sqlQuery = "";
include('connect.php');
if (isset($_SESSION['username']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: http://localhost/mingrand/public/login.php');
}
if(isset($_POST['namechange'])){
    if(isset($_POST['newname'])){
        $newname = addslashes($_POST['newname']);
    }
    if(isset($_POST['password'])){
        $password = addslashes($_POST['password']);
        $password = md5($password);
    }
    $change = isset($_GET['change']) && $_GET['change'] ? trim($_GET['change']) : '';
    
        if(isset($_SESSION['password']) && $_SESSION['password'] == $password){
            $query = mysqli_query($conn,"UPDATE user SET name = '{$newname}' WHERE username = '{$_SESSION['username']}'");
            echo "Your name has been changed!";
        } else {
            echo "Your password is incorrect!. <a href='javascript: history.go(-1)'>Go Back</a>";
            exit;
        }
    
}
if(isset($_POST['passwordchange'])){
    if(isset($_POST['newpassword'])){
        $newpassword = addslashes($_POST['newpassword']);
    }
    if(isset($_POST['password'])){
        $password = addslashes($_POST['password']);
        $password = md5($password);
    }
    if(isset($_POST['renewpassword'])){
        $renewpassword = addslashes($_POST['renewpassword']);
    }

    if($renewpassword = $newpassword){
        $uppercase    = preg_match('@[A-Z]@', $newpassword);
        $lowercase    = preg_match('@[a-z]@', $newpassword);
        $number       = preg_match('@[0-9]@', $newpassword);
        $specialChars = preg_match('@[^\w]@', $newpassword);

        if(isset($_SESSION['password']) && $_SESSION['password'] == $password) {
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newpassword) < 8){
                echo "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.<a href='javascript: history.go(-1)'>Go Back</a>";
                exit;
            } else {
                if ($newpassword == $password) {
                    echo "Please change password different from old password! <a href='javascript: history.go(-1)'>Go Back</a>";
                    exit;
                } else {
                    $newpassword = md5($newpassword);
                    $query = mysqli_query($conn,"UPDATE `user` SET `password` = '{$newpassword}' WHERE `username`='{$_SESSION['username']}'");
                    echo "Your password has been changed!";
                    $_SESSION['password'] = $newpassword;
                }
            }
        } else {
            echo "Your password is incorrect!. <a href='javascript: history.go(-1)'>Go Back</a>";
            exit;
        }
    } else {
        echo "Your password is not match!. <a href='javascript: history.go(-1)'>Go Back</a>";
            exit;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="setting-wrapper">
        <div class="property-banner">
            <div class="container">
                <nav id="navbar" class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./index.php">
                            <img
                            class="logo-img"
                            src="./assets/image/logo.png"
                            alt="logo"
                            />
                            <img
                            class="logo-img"
                            src="./assets/image/logo-text.png"
                            alt="logo"
                            />
                        </a>
                        <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white active home-nav" aria-current="page" href="./index.php"
                                >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./propertygrid.php">Properties +</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./pages.php">Pages +</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </li>
                        </div>
                        <form class="d-flex header-form" role="search">
                            <button class="submit-btn" type="submit">Submit +</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="setting-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 login-box">
                        <form action="setting.php?do=changename" method="post" class="col-md-12">
                            <h3>Change your Name</h3>
                            <div class="form-group">
                                <label for="newname">Enter your new name</label>
                                <input type="text" name="newname" id="name" class="form-control">
                                <label for="password">Enter your password</label>
                                <input type="password" name="password" class="form-control">
                                <input type="submit" name="namechange" class="btn btn-success float-end" value="Save">
                            </div>
                        </form>
                        <form action="setting.php?do=changepassword" method="post" class="col-md-12 change-password">
                            <h3>Change your Password</h3>
                            <div class="form-group">
                                <label for="password">Enter your password</label>
                                <input type="password" name="password" class="form-control">
                                <label for="newpassword">Enter your new password</label>
                                <input type="password" name="newpassword" class="form-control">
                                <label for="renewpassword">Re-enter your new password</label>
                                <input type="password" name="renewpassword" class="form-control">
                                <input type="submit" name="passwordchange" class="btn btn-success float-end" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-top">
                <div class="footer-logo container">
                    <div class="row justify-content-center">
                      <div class="row company-logo-row col-lg-4 col-12">
                        <div class="company-logo">
                          <img src="./assets/image/logo.png" alt="logo">
                          <img src="./assets/image/logo-text.png" class="company-logo-text" alt="logo-text">
                        </div>
                      </div>
                      <div class="footer-contact col-lg-8 d-flex justify-content-end">
                        <a class="" href="https://www.facebook.com/" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-facebook-f"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.twitter.com/" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-twitter"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.instagram.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-instagram"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.skype.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-skype"></i>
                          </div>
                        </a>
                        <a class="" href="https://www.pinterest.com" target="_blank">
                          <div class="logo-circle rounded-circle">
                            <i class="fa-brands fa-pinterest-p"></i>
                          </div>
                        </a>
                      </div>
                      
                  </div>
                </div>
            <div class="footer-content">
                <div class="footer-content-container container">
                    <div class="row">
                      <div class="col-lg-3 col-sm-auto col-12">
                        <div class="company-info">
                          <h2>COMPANY</h2>
                          <div class="company-detail">
                            <div class="location-detail">
                              <i class="fa-solid fa-location-dot"></i>
                              <span>420 Love Sreet 133/2 Mirpur City, Dhaka</span>
                            </div>
                            <div class="phone-detail">
                              <i class="fa-solid fa-phone"></i>
                              <span>+(066) 19 5017 800 628</span>
                            </div>
                            <div class="mail-detail">
                              <i class="fa-solid fa-envelope"></i>
                              <span>info.contact@gmail.com</span>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-auto col-6 quick-links">
                            <h2>QUICK LINKS</h2>
                            <a href="">Our Services</a>
                            <a href="">Terms of Use</a>
                            <a href="">New Guest List</a>
                            <a href="">The Team List</a>
                        </div>
                        <div class="col-sm-auto col-6 categories-footer">
                            <h2>CATEGORIES</h2>
                            <a href="">Art & Design</a>
                            <a href="">Business</a>
                            <a href="">Computer Science</a>
                            <a href="">Deta Science</a>
                        </div>
                      <div class="col-lg-4 col-sm-auto col-12">
                        <div class="newslater">
                          <h2>NEWSLATER</h2>
                          <p>Lorem ipsum dolor sit amet,</p>
                          <div class="subcribe-form">
                            <input class="form-control" type="text" name="mail" id="mail" placeholder="Your Mail">
                            <button class="btn btn-success">Subcribe</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
          <div class="copyright">
            <hr>
            <div class="copyright-detail">
              <div class="container">
                <span class="copyright-text">©2020, Copy Right By Ijm NH. All Rights Reserved copy</span>
              </div>
              <div class="nav-link-footer d-flex">
                <a href="./index.php">HOME</a>
                <p>|</p>
                <a href="./about.php">ABOUT</a>
                <p>|</p>
                <a href="./blog.php">BLOG</a>
                <p>|</p>
                <a href="./contact.php">CONTACT</a>
              </div>
              
            </div>
          </div>
        </div>
    </div>
</body>
</html>