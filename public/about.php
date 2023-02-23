<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8", "root", "");

$sqlQueryAgent = "SELECT * FROM agent LIMIT 8";
$stmtAgent = $connect->prepare($sqlQueryAgent);
$stmtAgent->execute();
$dataAgent = $stmtAgent->fetchAll();

$sqlQueryUser = "SELECT * FROM user ORDER BY `rating` desc LIMIT 6";
$stmtUser = $connect->prepare($sqlQueryUser);
$stmtUser->execute();
$dataUser = $stmtUser->fetchAll();

$sqlQueryOffice = "SELECT * FROM office LIMIT 3";
$stmtOffice = $connect->prepare($sqlQueryOffice);
$stmtOffice->execute();
$dataOffice = $stmtOffice->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/fontawesome6/css/fontawesome.min.css" rel="stylesheet">
    <link href="./assets/fontawesome6/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="wrapper-about">
        <div class="about-banner">
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
                                <a class="nav-link text-success" href="./about.php">About</a>
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
                          </ul>
                        <form class="d-flex header-form" role="search">
                            <button class="submit-btn" type="submit">Submit +</button>
                        </form>
                    </div>
                  </div>
                </nav>
            </div>
            <div class="contact-us text-center">
                <h1>About us</h1>
                <div class="breadcrump d-flex justify-content-center">
                    <a href="./index.php">
                        <span>Home</span>
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <h5>About us</h5>
                </div>
            </div>
        </div>
        <div class="about-slide">
          <div class="about-content">

            <div class="container">
              <div class="row">
                    <div class="about-content-primary col-lg-8 col-12 row justify-content-around">
                        <div class="about-text col-12">
                          <p class="about-text-slogan">We are offring the best real estate</p>
                          <h2>The exparts in local.</h2>
                          <h5>Lorem ipsum dolor  consectetur aLorem ipsum  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h5>
                          <p>Lorem ipsum dolor  consectetur aLorem ipsum  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                          <ul class="d-flex row">
                            <div class="col-md-6">
                              <li>Tempor incididunt  Amet</li>
                              <li>Exercitation ullamco</li>
                              <li>Dolore magna aliqua quis nisi</li>
                            </div>
                            <div class="col-md-6">
                              <li>Tempor incididunt  Amet</li>
                              <li>Exercitation ullamco</li>
                            </div>
                          </ul>
                        </div>
                        <div class="col-8 row about-text-banner text-center">
                          <div class="col-5 about-text-banner-primary">
                            <span>We Have Over</span>
                            <h2>75</h2>
                            <h3>YEARS</h3>
                            <div class="about-text-banner-span">
                              <span>EXPARTED</span>
                            </div>
                          </div>
                          <div class="col-5 about-text-banner-extra">

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="div-none">
                        <div class="div-none-child"></div>
                      </div>
                    </div>
              </div>
            </div>
              </div>
        </div>
        <div class="about-counter">
            <div class="container">
                <div class="row text-center">
                    <div class="col-3">
                        <h3>2981</h3>
                        <p>Creative Works</p>
                    </div>
                    <div class="col-3">
                        <h3>414</h3>
                        <p>Growing Team</p>
                    </div>
                    <div class="col-3">
                        <h3>678</h3>
                        <p>Client Works</p>
                    </div>
                    <div class="col-3">
                        <h3>541+</h3>
                        <p>Project Done</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="about-sell-property about-item">
                            <img src="./assets/image/icon/icon1.png" alt="">
                            <h3>Sell Property</h3>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="about-daily-apartment about-item">
                            <img src="./assets/image/icon/icon2.png" alt="">
                            <h3>Daily Apartment</h3>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="about-family-house about-item">
                            <img src="./assets/image/icon/icon3.png" alt="">
                            <h3>Family House</h3>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best-agent">
            <div class="best-agent-container container">
              <div class="slide-heading-form row text-center">
                <span class="slide-slogan">Meet Our Agent</span>
                <span class="slide-heading">Our Best Agent</span>
              </div>
              <div class="agent-list row">
                <?php foreach($dataAgent as $keyAgent => $agent):?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="agent-item text-center">
                    <div class="agent-img">
                      <div class="agent-circle rounded-circle" style="background-image: url('<?= $agent['avatar']?>')"></div>
                    </div>
                    <div class="agent-info">
                      <h2 class="agent-name"><?= $agent['name']?></h2>
                      <p class="agent-position"><?= $agent['position']?></p>
                      <div class="agent-contact">
                        <a href="<?= $agent['facebook']?>" target="_blank">
                          <div class="circle-icon rounded-circle">
                            <i class="fa-brands fa-facebook-f"></i>
                          </div>
                        </a>
                        <a href="<?= $agent['linkedin']?>" target="_blank">
                          <div class="circle-icon rounded-circle">
                            <i class="fa-brands fa-linkedin-in"></i>
                          </div>
                        </a>
                        <a href="<?= $agent['instagram']?>" target="_blank">
                          <div class="circle-icon rounded-circle">
                            <i class="fa-brands fa-instagram"></i>
                          </div>
                        </a>
                        <a href="<?= $agent['twitter']?>" target="_blank">
                          <div class="circle-icon rounded-circle">
                            <i class="fa-brands fa-twitter"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach?>
              </div>
            </div>
        </div>
        <div class="testomonial">
          <div class="testomonial-container">
            <div class="slide-heading-form row text-center">
              <span class="slide-slogan">Our Testomonial </span>
              <span class="slide-heading">What Client Say</span>
            </div>
            <div class="user-feedback-slide row">
              <?php foreach($dataUser as $keyUser=>$user):?>
              <div class="user-feedback text-center">
                <div class="avt-circle rounded-circle" style="background-image: url('<?= $user['avatar']?>')"></div>
                <div class="user-feedback-text">
                  <p class="user-feedback-detail"><?= $user['feedback']?></p>
                  <p class="user-feedback-name"><?= $user['name']?></p>
                  <p class="user-feedback-position"><?= $user['position']?></p>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="more-info">
          <div class="slide-heading-form row text-center">
            <span class="slide-slogan">More About Us</span>
            <span class="slide-heading">More Info</span>
          </div>
          <div class="container text-center">
            <div class="row text-start">
              <div class="col-md-4">
                <div class="more-info-item">
                  <div class="more-info-img" style="background-image: url('./assets/image/office/office1.jpg'); height: 290px; background-size: cover"></div>
                  <div class="more-info-detail">
                    <h3>New York Office</h3>
                    <p>Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="more-info-item">
                  <div class="more-info-img" style="background-image: url('./assets/image/office/office2.jpg'); height: 290px; background-size: cover"></div>
                  <div class="more-info-detail">
                    <h3>Boston Office</h3>
                    <p>Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="more-info-item">
                  <div class="more-info-img" style="background-image: url('./assets/image/office/office3.jpg'); height: 290px; background-size: cover"></div>
                  <div class="more-info-detail">
                    <h3>India Office</h3>
                    <p>Lorem ipsum dolor amet consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.minim</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="read-more-btn">
              <button>
                <span>READ MORE</span>
                <i class="fa-solid fa-right-long"></i>
              </button>
            </div>
          </div>
          <a href="#navbar">
            <button class="go-header-btn">
                <i class="fa-solid fa-chevron-up"></i>
            </button>
          </a>
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

    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('.user-feedback-slide').slick({
          infinite: true,
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          arrow: true,
          prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
          nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
      });
    });
    </script>
</body>
</html>