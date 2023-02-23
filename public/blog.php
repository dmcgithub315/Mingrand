<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8",
"root", "");
$sqlQuery = "SELECT blog.id as id, blog.image as image, blog.time as time, blog.title as title, blog.content1 as content1, user.avatar as avatar, user.name as name 
FROM blog JOIN user ON blog.userid = user.id";

if(isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    $search = " WHERE blog.title LIKE '%{$keyword}%' OR blog.content1 LIKE '%{$keyword}%' OR blog.content2 LIKE '%{$keyword}%' ";
    $sqlQuery = "SELECT blog.id as id, blog.image as image, blog.time as time, blog.title as title, blog.content1 as content1, blog.content2 as content2,
    user.avatar as avatar, user.name as name 
    FROM blog JOIN user ON blog.userid = user.id
    {$search}";
} 

$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetchAll();
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
                        <?php foreach($data as $key => $feed):?>
                            <div class="blog-item">
                                <div class="blog-item-img" style="background-image: url('<?= $feed['image']?>')"></div>
                                <div class="blog-item-text">
                                    <div class="blog-item-tag text-center">
                                        <p>Business</p>
                                    </div>
                                    <h3><?= $feed['title']?></h3>
                                    <div class="blog-item-info d-flex">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p><?= $feed['time']?></p>
                                        <i class="fa-solid fa-eye"></i>
                                        <p>4263</p>
                                        <i class="fa-solid fa-message"></i>
                                        <p>68</p>
                                    </div>
                                    <p><?=substr($feed['content1'], 0, 500)?></p>
                                    <div class="blog-item-user d-flex justify-content-between">
                                        <div class="blog-item-user-detail d-flex">
                                            <div class="user-avt-circle rounded-circle" style="background-image: url('<?= $feed['avatar']?>')"></div>
                                            <p><?= $feed['name']?></p>
                                        </div>
                                        <a href="blogsingle.php?id=<?= $feed['id']?>" class="d-flex">
                                            <p>Read More</p>
                                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                        <!-- <ul class="pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item-active">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">1</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">2</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">3</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">4</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">5</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">...</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <span class="pagination__link-span">14</span>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination__link text-center">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul> -->
                        <div class="page-number d-flex justify-content-center">
                            <div class="page-number-circle rounded-circle">
                                <i class="fa-solid fa-angles-left"></i>                           
                            </div>
                            <div class="page-number-circle rounded-circle">
                                <p>1</p>                          
                            </div>
                            <div class="page-number-circle rounded-circle">
                                <p>2</p>                          
                            </div>
                            <div class="page-number-circle rounded-circle">
                                <p>3</p>                          
                            </div>
                            <div class="page-number-circle rounded-circle">
                                <i class="fa-solid fa-ellipsis"></i>                     
                            </div>
                            <div class="page-number-circle rounded-circle">
                                <i class="fa-solid fa-angles-right"></i>                       
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
                            <h4>Mạnh Cường</h4>
                            <p>Web developer in Ha Noi. Hobies are coding, playing soccer and travel. My life motto is "No Pain, No Gain".</p>
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
                            <?php foreach($data as $key => $feed):?>
                                <div class="blog-popular-feeds row">
                                    <div class="blog-feeds-item col-xl-3">
                                        <div class="avt-circle rounded-circle" style="background-image: url('<?= $feed['image']?>')"></div>
                                    </div>
                                    <div class="blog-feeds-text col-xl-9">
                                        <a href="blogsingle.php?id=<?= $feed['id']?>">
                                            <h5><?= substr($feed['title'], 0, 50)?></h5>
                                        </a>
                                        <div class="blog-feeds-date d-flex">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <p><?= $feed['time']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach?>
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
                        <div id="subcribe-form" class="blog-right-item blog-right-item-dark">
                            <div class="blog-right-title-dark d-flex">
                                <span>|</span>
                                <h3>Subcribe</h3>
                            </div>
                            <div class="blog-subcribe-form">
                                <p>Don't Miss Lasttest News</p>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="First Name" require>
                                </div>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="Last Name" require>
                                </div>
                                <div class="blog-input">
                                    <input class="form-control" type="text" placeholder="Enter mail" require>
                                </div>
                                <button class="rounded-pill" onclick="subcribeForm()">Subcribe</button>
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

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script>
        var subcribe = document.getElementById("subcribe-form");
        function subcribeForm(){
            subcribe.innerHTML = "Check your email to not miss lasttest news!"
        }
    </script>
</body>
</html>