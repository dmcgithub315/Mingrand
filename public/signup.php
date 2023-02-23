<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="wrapper-login">
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
        <div class="login-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 login-box">
                        <form action="xuly.php" method="post" class="col-md-12 row">
                            <h3>Sign up</h3>
                            <div class="form-group col-12">
                                <label for="name" class="form-text">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="username" class="form-text">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="email" class="form-text">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="password" class="form-text">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="confirm-password" class="form-text">Confirm Password:</label><br>
                                <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                            </div>
                            <div class="form-group col-12">
                                <label for="read-terms" class="checkbox-btn">
                                    <span>I have read and agree to the terms</span>
                                    <span><input id="read-terms" name="read-terms" type="checkbox"></span>
                                </label><br>
                                <input type="submit" name="register" class="btn btn-success btn-md login-btn" value="Register">
                            </div>
                            <div id="login-link" class="d-flex justify-content-center">
                                <p>You have account?</p>&nbsp;
                                <a href="./login.php" class="">Login here</a>
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