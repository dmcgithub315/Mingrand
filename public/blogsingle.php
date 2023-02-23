<?php
$id = $_GET['id'];
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8",
"root", "");
$sqlQuery = "SELECT * FROM blog WHERE id = {$id}";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetch();
if(isset($data['album'])){
    $album = json_decode($data['album'], true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./assets/slick/slick.css">
</head>
<body>
    <div class="wrapper-blog">
        <div class="blog-banner">
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
                                <a class="nav-link text-success" href="./blog.php">Blog</a>
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
            <div class="contact-us text-center">
                <h1>News Feed</h1>
                <div class="breadcrump d-flex justify-content-center">
                    <a href="./index.php">
                        <span>Home</span>
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <h5>Blog</h5>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="news-detail">
                            <div class="blog-item-tag text-center">
                                <p>Business</p>
                            </div>
                            <h3><?= $data['title']?></h3>
                            <div class="blog-item-info d-flex">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Marce 9, 2020</p>
                                <i class="fa-solid fa-eye"></i>
                                <p>4263</p>
                                <i class="fa-solid fa-message"></i>
                                <p>68</p>
                            </div>
                            <hr>
                            <div class="blog-slider">
                                <?php foreach($album as $albumkey => $albumvalue):?>
                                    <div class="blog-slider-item">
                                        <img src="<?= $albumvalue?>" alt="">
                                    </div>
                                <?php endforeach?>
                            </div>
                            <div class="news-detail-text">
                                <p><?= nl2br($data['content1']);?></p>
                            </div>
                            <audio controls>
                                <source src="./assets/audio/blog-single-audio.mp3" type="audio/mpeg">
                            </audio>
                            <h5>Lorem Ipsum Dolor Sit Amet</h5>
                            <div class="blog-quote d-flex<?php isset($data['quote']) ? "" :"d-none" ?>">
                                <img src="./assets/image/line-down.jpg" alt="">
                                <div class="blog-quote-content">
                                    <img src="./assets/image/blog-quote-img.jpg" alt="">
                                    <h5><?= $data['quote']?></h5>
                                    <hr>
                                    <p><?= $data['author']?></p>
                                </div>
                            </div>
                            <div class="news-detail-text">
                                <p><?= nl2br($data['content2'])?></p>
                            </div>
                            <hr>
                            <div class="blog-tag-link d-flex justify-content-between">
                                <div class="blog-tag">
                                    <span>Treands</span>
                                    <span>Inttero</span>
                                    <span>Estario</span>
                                </div>
                                <div class="blog-link d-flex">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.skype.com/" target="_blank">
                                        <i class="fa-brands fa-skype"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                        <i class="fa-brands fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="blog-comment">
                                <div class="blog-comment-title d-flex">
                                    <span>|</span>
                                    <h3>3 Comments</h3>
                                </div>
                                <div class="blog-comment-content d-flex">
                                    <div class="comment-user-avt rounded-circle"></div>
                                    <div class="blog-comment-detail">
                                        <h5>Roe Nurr</h5>
                                        <span>Marce 9, 2020</span>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur</p>
                                        <p class="reply-button">REPLY</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog-comment-content blog-comment-content-right d-flex">
                                    <div class="comment-user-avt rounded-circle"></div>
                                    <div class="blog-comment-detail">
                                        <h5>Mirknu Strenli</h5>
                                        <span>Marce 9, 2020</span>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur</p>
                                        <p class="reply-button">REPLY</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="blog-comment-content d-flex">
                                    <div class="comment-user-avt rounded-circle"></div>
                                    <div class="blog-comment-detail">
                                        <h5>Starlye Sikrio</h5>
                                        <span>Marce 9, 2020</span>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur</p>
                                        <p class="reply-button">REPLY</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="blog-reply row">
                                <div class="blog-comment-title d-flex">
                                    <span>|</span>
                                    <h3>Leave a Reply</h3>
                                </div>
                                <p>Your Email addres not be published  adipisicing elit, sed*</p>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Website">
                                </div>
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Message">
                                </div>
                                <div class="save-info d-flex">
                                    <input type="checkbox" name="" id="">
                                    <p>Save my name, email, website for the next time</p>
                                </div>
                                <div>
                                    <button class="btn btn-success">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="blog.php" method="post" class="place-selection-item d-flex justify-content-between rounded-pill">
                            <input class="form-control rounded-pill" type="text" name="keyword" placeholder="Search your keyword">
                            <button class="number-circle rounded-circle">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form action="blog.php" method="post">
                        <div class="blog-right-item about-me-blog text-center">
                            <div class="blog-right-title d-flex">
                                <span>|</span>
                                <h3>About Me</h3>
                            </div>
                            <div class="about-me-avt">
                                <div class="avt-circle rounded-circle"></div>
                            </div>
                            <h4>Sandara Mrikon</h4>
                            <p>Lorem ipsum dolor amet, Lore ipsum dolor sit amet, consectetur et adipisicing  eiLorem ipsum dolor sit amet</p>
                            <div class="about-me-contact">
                                <a href="https://www.facebook.com" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.skype.com" target="_blank">
                                    <i class="fa-brands fa-skype"></i>
                                </a>
                                <a href="https://www.pinterest.com" target="_blank">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-right-item">
                            <div class="blog-right-title d-flex">
                                <span>|</span>
                                <h3>Popular Feeds</h3>
                            </div>
                            <div class="blog-popular-feeds row">
                                <div class="blog-feeds-item col-xl-3">
                                    <div class="avt-circle rounded-circle"></div>
                                </div>
                                <div class="blog-feeds-text col-xl-9">
                                    <h5>Lorem ipsum dolor sit amet Lorem ipsum</h5>
                                    <div class="blog-feeds-date d-flex">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p>Marce 9, 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-popular-feeds row">
                                <div class="blog-feeds-item col-xl-3">
                                    <div class="avt-circle rounded-circle"></div>
                                </div>
                                <div class="blog-feeds-text col-xl-9">
                                    <h5>Lorem ipsum dolor sit amet Lorem ipsum</h5>
                                    <div class="blog-feeds-date d-flex">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p>Marce 9, 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-popular-feeds border border-0 row">
                                <div class="blog-feeds-item col-xl-3">
                                    <div class="avt-circle rounded-circle"></div>
                                </div>
                                <div class="blog-feeds-text col-xl-9">
                                    <h5>Lorem ipsum dolor sit amet Lorem ipsum</h5>
                                    <div class="blog-feeds-date d-flex">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p>Marce 9, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-right-item categories-selector">
                            <div class="blog-right-title d-flex">
                                <span>|</span>
                                <h3>Categories</h3>
                            </div>
                            <div class="categories-selection">
                                <ul>
                                    <li class="row">
                                        <p class="col-8">Design</p>
                                        <p class="col-2 text-center">26</p>
                                    </li>
                                    <li class="row">
                                        <p class="col-8">Villa House</p>
                                        <p class="col-2 text-center">21</p>
                                    </li>
                                    <li class="row">
                                        <p class="col-8">Business</p>
                                        <p class="col-2 text-center">8</p>
                                    </li>
                                    <li class="row">
                                        <p class="col-8">Global World</p>
                                        <p class="col-2 text-center">13</p>
                                    </li>
                                    <li class="row">
                                        <p class="col-8">Residantial</p>
                                        <p class="col-2 text-center">36</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-right-item blog-right-item-dark">
                            <div class="blog-right-title-dark d-flex">
                                <span>|</span>
                                <h3>Subcribe</h3>
                            </div>
                            <div class="blog-subcribe-form">
                                <p>Don't Miss Lasttest News</p>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="Enter mail">
                                </div>
                                <button class="rounded-pill">Subcribe</button>
                            </div>
                        </div>
                        <div class="blog-right-item">
                            <div class="blog-right-title d-flex">
                                <span>|</span>
                                <h3>Instagram Feeds</h3>
                            </div>
                            <div class="instagram-feeds-img d-flex flex-wrap row">
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                                <div class="instagram-feeds-item col-4"></div>
                            </div>
                        </div>
                        <div class="add-banner-item">
                            <div class="add-banner text-center">
                                <span>380*500</span>
                                <h5>Add Banner</h5>
                            </div>
                        </div>
                        <div class="blog-right-item">
                            <div class="blog-right-title d-flex">
                                <span>|</span>
                                <h3>Popular Tag</h3>
                            </div>
                            <div class="blog-popular-list">
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Popular</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Art</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Business</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Design</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Devolper</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Creator</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Editorse</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Popular</span>
                                </div>
                                <div class="blog-popular-tag d-inline-block rounded-pill">
                                    <span>Art</span>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <a href="#navbar">
                    <button class="go-header-btn">
                        <i class="fa-solid fa-chevron-up"></i>
                    </button>
                </a>
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

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.blog-slider').slick({
          infinite: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrow: false,
        });
      });
    </script>
</body>
</html>