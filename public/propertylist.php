<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=mingrand;charset=utf8",
"root", "");
$location = isset($_GET['location']) && $_GET['location'] ? trim($_GET['location']) : '';
$type = isset($_GET['type']) && $_GET['type'] ? trim($_GET['type']) : '';
$wherelo = '';

if(isset($_GET['type'])){
    $sqlQueryHome = "SELECT * FROM house WHERE type = '{$type}'";
    $stmt = $connect->prepare($sqlQueryHome);
    $stmt->execute();
    $data = $stmt->fetchAll();
}
if(isset($_GET['location'])){
    if($location == 'NewYork'){
        $wherelo = 'New York';
    } if($location == 'HaNoi'){
        $wherelo = 'Ha Noi';
    } if($location == 'London'){
        $wherelo = 'London';
    } if($location == 'Melbourne'){
        $wherelo = 'Melbourne';
    }
    $sqlQueryHome = "SELECT * FROM house WHERE location = '{$wherelo}'";
    $stmt = $connect->prepare($sqlQueryHome);
    $stmt->execute();
    $data = $stmt->fetchAll();
}
if(isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    $search = " WHERE title LIKE '%{$keyword}%' OR location LIKE '%{$keyword}%' OR type LIKE '%{$keyword}%' OR locationdetail LIKE '%{$keyword}%' ";
    $sqlQueryHome = "SELECT * FROM house {$search} LIMIT 6";
    $stmt = $connect->prepare($sqlQueryHome);
    $stmt->execute();
    $data = $stmt->fetchAll();
} 
if(isset($GET['location']) && isset($GET['type']) && isset($GET['price'])){
    $locationSelect = $GET['location'];
    $typeSelect = $GET['type'];
    if($GET['price'] == "50K"){
        $priceSelect = "< 50000";
    }
    if($GET['price'] == "50K-100K"){
        $priceSelect = "BETWEEN 50000 AND 100000";
    }
    if($GET['price'] == ">100K"){
        $priceSelect = "> 100000";
    }
    $sqlQueryHome = "SELECT * FROM house WHERE location = {$locationSelect} AND type = {$typeSelect} AND price {$priceSelect}";
    $stmt = $connect->prepare($sqlQueryHome);
    $stmt->execute();
    $data = $stmt->fetchAll();
}
if(!isset($location) && !isset($_POST['keyword']) && !isset($GET['location']) && !isset($GET['type']) && !isset($GET['price'])){
    $sqlQueryHome = "SELECT * FROM house LIMIT 6";
    $stmt = $connect->prepare($sqlQueryHome);
    $stmt->execute();
    $data = $stmt->fetchAll();
}

$sqlPopular = "SELECT * FROM house ORDER BY id asc LIMIT 4";
$stmt3 = $connect -> prepare($sqlPopular);
$stmt3 -> execute();
$data3 = $stmt3 -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property List</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="wrapper-property">
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
                                <a class="nav-link text-success" href="./propertygrid.php">Properties +</a>
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
            <div class="contact-us text-center">
                <h1>Property List</h1>
                <div class="breadcrump d-flex justify-content-center">
                    <a href="./index.php">
                        <span>Home</span>
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <h5>Property List</h5>
                </div>
            </div>
        </div>
        <div class="property-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 row">
                        <div class="col-12">
                            <div class="search-property d-flex flex-wrap">
                                <p>21 Properties</p>
                                <form action="propertylist.php" method="post">
                                    <div class="search-form rounded-pill">
                                        <input class="rounded-pill" type="text" name="keyword" placeholder="Search your keyword">
                                        <button class="rounded-circle">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="dropdown">
                                    <button class="sort-by-dropdown btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Sort By
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Area</a></li>
                                      <li><a class="dropdown-item" href="#">Price (Min -> Max)</a></li>
                                      <li><a class="dropdown-item" href="#">Price (Max -> Min)</a></li>
                                    </ul>
                                </div>
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                        <?php foreach($data as $key=>$house):?>
                        <div class="col-12 list-item row" >
                            <a class="col-xl-7 col-12" href="./propertydetail.php?id=<?= $house['id']?>">
                                <div class=" list-item-img" style="background-image:url('<?= $house['image']?>')">
                                </div>
                            </a>
                            <div class="col-xl-5 col-12 list-item-content">
                                <a class="col-xl-7 col-12" href="./propertydetail.php?id=<?= $house['id']?>">
                                    <h3><?= substr($house['title'], 0, 100)?></h3>
                                </a>
                                <i class="fa-solid fa-location-dot"></i>
                                <span><?= $house['location']?></span>
                                <div class="for-sell-small">
                                <span><?= $house['purpose']?></span>
                            </div>
                                <p><?= $house['description']?></p>
                                <span class="apartment-price">$<?= number_format($house['price'])?></span>
                                <div class="apartment-detail d-flex">
                                    <p>Bedroom: <?= $house['bedrooms']?></p>
                                    <p>Bathroom: <?= $house['bathrooms']?></p>
                                    <p>Size: <?= $house['area']?> sq ft</p>
                                </div>
                                <div class="property-img-content d-flex">
                                    <i class="fa-solid fa-user"></i>
                                    <p>MD Mrikon</p>
                                    <span>|</span>
                                    <p>Compare</p>
                                    <span>|</span>
                                    <p>Details</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
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
                    <div class="col-lg-4 col-md-5">
                            <div class="price-selector">
                                <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Price</h3>
                                </div>
                                <div class="price-range">
                                    <input type="range" class="form-range custom-range" min="1" max="100" value="50" id="customRange1">
                                    <p class="range-text">$<span id="rangeId1"></span>k</p>
                                </div>
                            </div>
                        <div class="categories-selector">
                            <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Categories</h3>
                            </div>
                            <div class="categories-selection">
                                <ul>
                                    <a href="propertylist.php?type=Villa">
                                        <li class="row">
                                            <p class="col-8">Villa</p>
                                            <p class="col-2 text-center">(26)</p>
                                        </li>
                                    </a>
                                    <a href="propertylist.php?type=Apartment">
                                        <li class="row">
                                            <p class="col-8">Apartment</p>
                                            <p class="col-2 text-center">(21)</p>
                                        </li>
                                    </a>
                                    <a href="propertylist.php?type=Indastrial">
                                        <li class="row">
                                            <p class="col-8">Indastrial</p>
                                            <p class="col-2 text-center">(8)</p>
                                        </li>
                                    </a>
                                    <a href="propertylist.php?type=Global World">
                                        <li class="row">
                                            <p class="col-8">Global World</p>
                                            <p class="col-2 text-center">(13)</p>
                                        </li>
                                    </a>
                                    <a href="propertylist.php?type=Residantial">
                                        <li class="row">
                                            <p class="col-8">Residantial</p>
                                            <p class="col-2 text-center">(36)</p>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <div class="information-selector">
                            <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Information</h3>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Car Garrage
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Car Garrage</a></li>
                                  <li><a class="dropdown-item" href="#">Bathroom</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bathroom
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Bathroom</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Bedroom
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Bedroom</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Front Ground
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Front Ground</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="place-selector">
                            <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Place</h3>
                            </div>
                            <a href="propertylist.php?location=NewYork">
                                <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                    <p class="col-8">New York</p>
                                    <div class="number-circle rounded-circle col-4">
                                        <p>26</p>
                                    </div>
                                </div>
                            </a>
                            <a href="propertylist.php?location=London">
                                <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                    <p>London</p>
                                    <div class="number-circle rounded-circle">
                                        <p>16</p>
                                    </div>
                                </div>
                            </a>
                            <a href="propertylist.php?location=HaNoi">
                                <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                    <p>Ha Noi</p>
                                    <div class="number-circle rounded-circle">
                                        <p>22</p>
                                    </div>
                                </div>
                            </a>
                            <a href="propertylist.php?location=Melbourne">
                                <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                    <p>Melbourne</p>
                                    <div class="number-circle rounded-circle">
                                        <p>41</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="area-selector">
                            <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Area</h3>
                            </div>
                            <div class="price-range">
                                <input type="range" class="form-range custom-range" min="0" max="3056" value="1500" id="customRange2">
                                <p class="range-text"><span id="rangeId2"></span> sq ft</p>
                            </div>
                        </div>
                        <div class="popular-proparty">
                            <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Popular Proparty</h3>
                            </div>
                            <?php foreach($data3 as $popularkey => $popularhouse):?>
                                <div class="popular-proparty-item d-flex">
                                    <div class="img-circle rounded-circle" style="background-image: url('<?= $popularhouse['image']?>')"></div>
                                    <div class="popular-proparty-item-text">
                                        <a href="propertydetail.php?id=<?= $popularhouse['id']?>">
                                            <h5><?= $popularhouse['title']?></h5>
                                        </a>
                                        <div class="d-flex">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p><?= $popularhouse['location']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach?>
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



    <script>
        var slider = document.getElementById("customRange1");
        var output = document.getElementById("rangeId1");
        output.innerHTML = slider.value; 

        slider.oninput = function() {
        output.innerHTML = this.value;
        }
        var slider2 = document.getElementById("customRange2");
        var output2 = document.getElementById("rangeId2");
        output2.innerHTML = slider2.value; 

        slider2.oninput = function() {
        output2.innerHTML = this.value;
        }
    </script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/slick/slick.min.js"></script>
  </body>
</html>
