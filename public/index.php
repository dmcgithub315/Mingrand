<?php
session_start();
$sqlQuery = "SELECT house.price as price, owner.avatar as avatar, owner.location as ownerlocation, house.bedrooms as bedrooms, house.bathrooms as bathrooms, 
owner.name as name, house.image as image, house.id as id , house.ownerId, house.area as area 
FROM house INNER JOIN owner ON house.ownerId=owner.id
ORDER BY house.id LIMIT 3" ;
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8",
    "root", "");
$sqlQueryUser = "SELECT `id`, `name`, `email`, `password`, `avatar`, `feedback`, `rating` FROM `user` ORDER BY `rating` desc LIMIT 6" ;
$stmt2 = $connect->prepare($sqlQueryUser);
$stmt2->execute();
$data2 = $stmt2->fetchAll();
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetchAll();


$sqlQuerySale = "SELECT house.image as image, user.avatar as avatar, user.name as name, house.id as id, house.type as type, 
house.location as houselocation, house.description as description, house.price as price, house.purpose as purpose, house.timepost as time
FROM house JOIN `user` ON house.ownerId = user.id 
WHERE house.purpose = 'For Sale' ORDER BY house.id desc LIMIT 6";
$stmtSale = $connect->prepare($sqlQuerySale);
$stmtSale->execute();
$dataSale = $stmtSale->fetchAll();

$sqlQueryRent = "SELECT house.image as image, user.avatar as avatar, user.name as name, house.id as id, house.type as type, 
house.location as houselocation, house.description as description, house.price as price, house.purpose as purpose, house.timepost as time
FROM house JOIN `user` ON house.ownerId = user.id 
WHERE house.purpose = 'For Rent' ORDER BY house.id desc LIMIT 6";
$stmtRent = $connect->prepare($sqlQueryRent);
$stmtRent->execute();
$dataRent = $stmtRent->fetchAll();

$sqlQueryAgent = "SELECT * FROM agent LIMIT 3";
$stmtAgent = $connect->prepare($sqlQueryAgent);
$stmtAgent->execute();
$dataAgent = $stmtAgent->fetchAll();

$sqlQueryFeed = "SELECT blog.id as id, user.name as username, blog.image as image, blog.time as time, blog.title as title, blog.content1 as content
FROM blog JOIN user ON blog.userid = user.id ORDER BY blog.id desc LIMIT 3 ";
$stmtFeed = $connect->prepare($sqlQueryFeed);
$stmtFeed->execute();
$dataFeed = $stmtFeed->fetchAll();
// Check connection
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MINGRAND</title>
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
    <div class="wrapper">
      <div class="banner">
        <div id="header" class="container">
          <div class="header-top row justify-content-between">
            <div class="header-top-left col-xl-8 col-12 row justify-content-center">
              <div class="header-location col-12 col-xl-5 col-md-auto">
                <i class="fa-solid fa-location-dot"></i>
                <span>420 Love Sreet 133/2 Mirpur City, Dhaka</span>
              </div>
              <div class="header-phone col-12 col-xl col-md-auto">
                <i class="fa-solid fa-phone"></i>
                <span>+(066) 19 5017 800 628</span>
              </div>
              <div class="header-mail col-12 col-xl col-md-auto">
                <i class="fa-solid fa-envelope"></i>
                <span>info.contact@gmail.com</span>
              </div>
            </div>  
            <div class="header-top-right row col-xl-4 col-md-12 justify-content-start justify-content-md-center justify-content-xl-end">
              <?php 
                if (isset($_SESSION['username']) && $_SESSION['username']){
                    echo "<div class='d-flex'><a href='profile.php'>{$_SESSION['username']}</a>&nbsp&nbsp&nbsp<a href='logout.php'>Logout</a></div>";
                  } else {
                    echo "<div class='col-auto row'><a class='col' href='./signup.php'>Register</a><a class='col' href='./login.php'>Login</a>
                    <p class='col brick'>|</p></div><div class='col-auto'><div class='d-flex flex-row'>
                    <i class='fa-brands fa-facebook-f'></i><i class='fa-brands fa-twitter'>
                    </i><i class='fa-brands fa-instagram'></i><i class='fa-brands fa-skype'></i></div></div>";
                  }
              ?>
              
            </div>
          </div>
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.php">
                <img
                  class="logo-img"
                  src="./assets/image/logo.png"
                  alt="logo"
                />
              </a>
              <a class="navbar-brand" href="./index.php">
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
                    <a class="nav-link active home-nav text-success" aria-current="page" href="./index.php"
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
              <form class="header-form d-flex" role="search">
                <a href="#">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <button class="submit-btn" type="submit">Submit Properties</button>
              </form>
            </div>
          </nav>
        </div>
        <div class="slider-text">
          <p class="text-center">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eius</p>
          <div class="container">
            <div class="mw-900 text-center">
              <h1>The Best Way To Find Your Perfect Home</h1>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
                <form class="col-md-10 search-selector row" action="propertygrid.php" method="get">
                  <div class="col-md-3 col-4">
                    <select name="location" class="form-control form-select">
                      <option value="">Location</option>
                      <option value="Ha Noi">Ha Noi</option>
                      <option value="NewYork">NewYork</option>
                      <option value="Florida">Florida</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-4">
                    <select name="type" id="" class="form-control form-select">
                      <option value=""> Type</option>
                      <option value="Villa">Villa</option>
                      <option value="Apartment">Apartment</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-4">
                    <select name="price" id="price" class="form-control form-select">
                      <option value="">Price</option>
                      <option value="<50K"> 0-50K</option>
                      <option value="50K-100K">50K-100K</option>
                      <option value=">100K">100K-1M</option>
                    </select>
                  </div>
                  <div class="col-md-3 col-12 text-center">
                  <button class="search-btn d-block w-100 text-center btn btn-success">
                    <i class="bi bi-search"></i>
                    <span>SEARCH</span>
                  </button>
                </form>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="banner-bottom-container container">
        <div class="banner-bottom row">
          <a href="./pages.php" class="sell-poparty col-md-4 text-center">
            <div class="circle rounded-circle">
              <img class="circle-img" src="./assets/image/icon/icon1.png" alt="icon 1">
            </div>
            <h3 class="banner-bottom-heading">Sell Poparty</h3>
            <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </a>
          <a href="./propertylist.php?type=Apartment" class="sell-poparty col-md-4 text-center">
            <div class="circle rounded-circle">
              <img class="circle-img" src="./assets/image/icon/icon2.png" alt="icon 2">
            </div>
            <h3 class="banner-bottom-heading">Daily Apartment</h3>
            <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </a>
          <a href="./propertylist.php?type=Villa" class="sell-poparty col-md-4 text-center">
            <div class="circle rounded-circle">
              <img class="circle-img" src="./assets/image/icon/icon3.png" alt="icon 3">
            </div>
            <h3 class="banner-bottom-heading">Luxury Villa</h3>
            <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </a>
        </div>
        <div class="slide-heading-form row text-center">
          <span class="slide-slogan">We are offring the best real estate</span>
          <span class="slide-heading">Best House For You</span>
        </div>
          <div class="best-house-list row">
            <?php foreach($data as $keyOwner => $owner):?>
            <div class="col-12 col-lg-6 col-xl-4">
              <a href="./propertydetail.php?id=<?= $owner['id']?>">
                <div class="best-house-item" style="background-image: url('<?= $owner['image']?>')">
                  <div class="for-sell text-center">
                    <span>For sell</span>
                  </div>
                  <div class="owner-form">
                    <div class="owner-avt">
                      <img src="<?= $owner['avatar']?>" alt="owner1">
                    </div>
                    <div class="owner-info">
                        <span><?= $owner['name']?></span>
                      <div class="best-house-location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= $owner['ownerlocation']?></span>
                      </div>
                    </div>
                    <button id="house-like1" class="house-like">
                      <i class="fa-solid fa-heart"></i>
                    </button>
                  </div>
                  <div class="best-house-info justify-content-between">
                    <div class="best-house-price">
                      <span>$ <?= number_format($owner['price']) ?>.00</span>
                    </div>
                    <div class="best-house-detail">
                      <img src="./assets/image/icon/best-house-icon1.png" alt="best-house-icon1">
                      <span><?=$owner['bedrooms']?></span>
                      <img src="./assets/image/icon/best-house-icon2.png" alt="best-house-icon2">
                      <span><?=$owner['bathrooms']?></span>
                      <img src="./assets/image/icon/best-house-icon3.png" alt="best-house-icon3">
                      <span><?=$owner['area']?> sq ft</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
              <?php endforeach?>
          </div>
      </div>
      <div class="video-slide text-center">
        <div class="container">

          <div class="video-slide-text">
            <h2>The Mordan House Video</h2>
            <p>Lorem ipsum dolor  amet, consectetur adipisicing elit Lorem ipsum dolor  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <!-- <button id="play-btn" class="circle-button rounded-circle">
              <i class="fa-solid fa-play play-arrow"></i>
            </button> -->
            <video id="video-home" src="./assets/video/video-house1.mp4"></video>
          </div>
          <div class="play-button">
            
          </div>
        </div>
      </div>
      <div class="populer-categores container">
        <div class="slide-heading-form row text-center">
          <span class="slide-slogan">We are offring the best real estate</span>
          <span class="slide-heading">Popular Categories</span>
        </div>
        <div class="categores-list row">
          <div class="col-md-4">
            <div class="categores-item">
              <div class="orchard-item">
                <div class="categores-text">
                  <p class="categores-heading">Orchard</p>
                  <div class="text-center">
                    <p>3 Propaties</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="categores-item">
              <div class="rose-cottage-item">
                <div class="categores-text">
                  <p class="categores-heading">Rose Cottage</p>
                  <div class="text-center">
                    <p>6 Propaties</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="categores-item">
              <div class="ong-barn-item">
                <div class="categores-text">
                  <p class="categores-heading">Ong Barn</p>
                  <div class="text-center">
                    <p>2 Propaties</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="categores-item">
              <div class="beach-hous-item">
                <div class="categores-text">
                  <p class="categores-heading">Beach Hous</p>
                  <div class="text-center">
                    <p>7 Propaties</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="categores-item">
              <div class="family-hous">
                <div class="categores-text">
                  <p class="categores-heading">Family Hous</p>
                  <div class="text-center">
                    <p>1 Propaties</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testomonial">
        <div class="testomonial-container">

          <div class="slide-heading-form row text-center">
            <span class="slide-slogan">Our Testomonial </span>
            <span class="slide-heading">What Client Say</span>
            <p class="testomonial-note">Lorem ipsum dolor  amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
          </div>
          <div class="user-feedback-slide">
            <?php foreach($data2 as $keyUser => $user):?>
            <div class="user-feedback text-center">
              <div class="avt-circle rounded-circle" style="background-image: url('<?= $user['avatar']?>')">
              </div>
              <div class="user-feedback-text">
                <p class="user-feedback-name"><?= $user['name']?></p>
                <p class="user-feedback-detail"><?= substr($user['feedback'], 0, 150)?></p>
                <div class="star-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
            <?php endforeach?>
          </div>
        </div>
      </div>
      <div class="our-propartes container">
        <div class="slide-heading-form text-center">  
          <span class="slide-slogan">Meet Our Agent</span>
          <span class="slide-heading">Our Propertes</span>
          <div class="rent-sell-option-btn nav nav-tabs mb-2">
            <button class="nav-link active" id="nav-rent-tab" data-bs-toggle="tab" data-bs-target="#nav-rent" type="button" role="tab" aria-controls="nav-rent" aria-selected="true">Rent</button>
            <button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">Sell</button>
 
          </div>
        </div>
        <div class="tab-content p-3 border bg-light" id="nav-tabContent">
          <div class="tab-pane fade active show daily-apartment-list row" id="nav-rent" role="tabpanel" aria-labelledby="nav-rent-tab">
            <?php foreach($dataRent as $keyRent => $rent):?> 
              <div class=" col-md-6 col-xl-4">
                <a href="./propertydetail.php?id=<?= $rent['id']?>">
                  <div class="daily-apartment-item">
                    <div class="daily-apartment-img" style="background-image: url('<?= $rent['image']?>')">
                    </div>
                    <div class="owner-form">
                      <div class="owner-avt">
                        <div class="avt-clone">
                          <div class="rounded-circle avt-clone-circle" style="background-image: url('<?= $rent['avatar']?>')"></div>
                        </div>
                      </div>
                      <div class="owner-info">
                        <span><?= $rent['name']?></span>
                        <div class="best-house-location">
                          <i class="fa-solid fa-location-dot"></i>
                          <span><?= $rent['houselocation']?></span>
                        </div>
                      </div>
                      <div class="house-like">
                        <i class="fa-solid fa-heart"></i>
                      </div>
                    </div>
                    <div class="daily-apartment-text">
                      <h2><?= $rent['type']?></h2>
                      <i class="fa-solid fa-location-dot"></i>
                      <span><?= $rent['houselocation']?></span>
                      <div class="for-sell-small">
                        <span><?= $rent['purpose']?></span>
                      </div>
                      <p><?= substr($rent['description'], 0, 50)?>...</p>
                    </div>
                    <div class="daily-apartment-detail">
                      <span>$<?= number_format($rent ['price'])?></span>
                      <span><?= $rent['purpose']?></span>
                      <span><?= $rent['time']?></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach?>
          </div>
          <div class="tab-pane fade daily-apartment-list row" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
            <?php foreach($dataSale as $keySale => $sale):?> 
              <div class=" col-md-6 col-xl-4">
                <a href="./propertydetail.php?id=<?= $sale['id']?>">
                  <div class="daily-apartment-item">
                    <div class="daily-apartment-img" style="background-image: url('<?= $sale['image']?>')">
                    </div>
                    <div class="owner-form">
                      <div class="owner-avt">
                        <div class="avt-clone">
                          <div class="rounded-circle avt-clone-circle" style="background-image: url('<?= $sale['avatar']?>')"></div>
                        </div>
                      </div>
                      <div class="owner-info">
                        <span><?= $sale['name']?></span>
                        <div class="best-house-location">
                          <i class="fa-solid fa-location-dot"></i>
                          <span><?= $sale['houselocation']?></span>
                        </div>
                      </div>
                      <div class="house-like">
                        <i class="fa-solid fa-heart"></i>
                      </div>
                    </div>
                    <div class="daily-apartment-text">
                      <h2><?= $sale['type']?></h2>
                      <i class="fa-solid fa-location-dot"></i>
                      <span><?= $sale['houselocation']?></span>
                      <div class="for-sell-small">
                        <span><?= $sale['purpose']?></span>
                      </div>
                      <p><?= substr($sale['description'], 0, 50)?>...</p>
                    </div>
                    <div class="daily-apartment-detail">
                      <span>$<?= number_format($sale ['price'])?></span>
                      <span><?= $sale['purpose']?></span>
                      <span><?= $sale['time']?></span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach?>
            
          </div>
        </div>
      </div>
      <div class="submit-property text-center">
        <div class="slide-heading-form row">
          <span class="slide-slogan">Buy Or Sell</span>
          <span class="slide-heading">Submit Property</span>
        </div>

        <div class="submit-property-text container">
          <div class="submit-property-note row">
            <div class="col-md-2"></div>
            <p class="col-md-8">Lorem ipsum dolor amet, consecte Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt dolore magna consecteLorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="col-md-2"></div>
          </div>
        </div>
        <div class="submit-buy-btn">
          <a href="pages.php" class="btn btn-success submit-property-btn">Submit</a>
          <a href="propertydetail.php" class="btn btn-success submit-property-btn">Buy</a href="propertydetail.php">
        </div>
      </div>
      <div class="best-agent">
        <div class="best-agent-container container">
          <div class="slide-heading-form row text-center">
            <span class="slide-slogan">Meet Our Agent</span>
            <span class="slide-heading">Our Best Agent</span>
          </div>
          <div class="agent-list row">
            <?php foreach($dataAgent as $keyAgent=>$agent):?>
            <div class="col-md-4">
              <div class="agent-item text-center">
                <div class="agent-img1" style="background-image: url('<?= $agent['avatar']?>')">
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
      <div class="client-logo">
        <div class="client-logo-container container">
          <div class="slide-heading-form row">
            <span class="slide-slogan">Buy Or Sell</span>
            <span class="slide-heading">Find Best Place For Leaving</span>
          </div>
          <div class="slide-heading-bottom">
            <p>Lorem ipsum dolor  amet, consecteLorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt dolore magna consecteLorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
            <form action="propertygrid.php">
              <button class="btn btn-success">SUBMIT</button>
            </form>
          </div>
          <div class="client-logo-form row text-center">
            <div class="col horizontal-logo1">
              <img src="./assets/image/client-logo/client-logo1.png" alt="client-logo">
            </div>
            <div class="col">
              <img src="./assets/image/client-logo/client-logo2.png" alt="client-logo">
            </div>
            <div class="col">
              <img src="./assets/image/client-logo/client-logo3.png" alt="client-logo">
            </div>
            <div class="col">
              <img src="./assets/image/client-logo/client-logo4.png" alt="client-logo">
            </div>
            <div class="col horizontal-logo2">
              <img src="./assets/image/client-logo/client-logo5.png" alt="client-logo">
            </div>
          </div>
        </div>
      </div>
      <div class="news-slide">
        <div class="news-slide-container container">
          <div class="slide-heading-form row text-center">
            <span class="slide-slogan">Blog & News</span>
            <span class="slide-heading">News Feeds</span>
          </div>
          <div class="news-list row">
            <?php foreach($dataFeed as $keyFeed=>$feed):?>
            <div class="news-item col-md-6 col-lg-4">
              <div class="news-img" style="background-image: url('<?= $feed['image']?>')"></div>
              <div class="news-info">
                <div class="news-creator">
                  <i class="fa-solid fa-user"></i>
                  <span><?= $feed['username']?></span>
                  <i class="fa-solid fa-calendar-days"></i>
                  <span><?= $feed['time']?></span>
                </div>
                <div class="news-text">
                  <h2 class="news-heading"><?= $feed['title']?></h2>
                  <p class="news-detail"><?= substr($feed['content'], 0, 100) ?></p>
                  <a href="/mingrand/public/blogsingle.php?id=<?= $feed['id']?>">
                    <div class="arrow-circle rounded-circle">
                      <i class="fa-sharp fa-solid fa-right-long"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach?>
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
                <!-- <div class="col-lg-2 col-0"></div> -->
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
                <div class="col-md-4">
                  <div class="company-info">
                    <h2>COMPANY</h2>
                    <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur et adipisicing eiusmod tempor incididunt labore</p>
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
                <div class="col-md-4">
                  <div class="news-feeds-footer">
                    <h2>NEWS FEEDS</h2>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Marce 9, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>April 3, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Marce 10, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>April 3, 2020</span>
                    <hr>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="newslater">
                    <h2>NEWSLATER</h2>
                    <p>Lorem ipsum dolor sit amet,</p>
                    <div class="subcribe-form d-flex">
                      <input class="form-control" type="text" name="mail" id="mail" placeholder="Your Mail">
                      <button class="btn btn-success">Subcribe</button>
                    </div>
                    <h2 class="house-tags">HOUSE TAGS</h2>
                    <div class="house-tags-list">
                      <div class="house-tags-item d-inline-block text-center">
                        <span>CREATIVE</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>DEVELOPMENT</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>BEACH</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>VILLA</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>CLEAN</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>SEO</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>APPERTMENT</span>
                      </div>
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
            <a href="#header">
              <button class="go-header-btn">
                <i class="fa-solid fa-chevron-up"></i>
              </button>
            </a>
            
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
          // prevArrow: '<div class="prev-slider"><i class="fa-solid fa-circle-chevron-left"></i></div>',
          // nextArrow: '<div class="next-slider"><i class="fa-solid fa-circle-chevron-right"></i></div>',
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

      var player = document.getElementById("video-home");
      var playerStatus = false;
      
      player.addEventListener("click", function() {
        if (playerStatus) {
          player.pause();
          playerStatus = !playerStatus;
        }
        else {
          player.play();
          playerStatus = !playerStatus;
        };
      });

      var liked1 = false;
      var button1 = document.getElementById('house-like1');
      button1.addEventListener('click', function() {
        if(!liked1) {
          this.style.color = 'red';
          liked1 = !liked1;
        }
        else {
          button1.removeAttribute('style');
          this.style.color = '#f9f9f9';
          liked1 = !liked1;
        }
      });
        
      
    </script>
  </body>
</html>
